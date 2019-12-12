<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller{

	protected $helpers = ['url'];
	protected $security;
	protected $session;
	protected $locale;

	//Controller建構
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		helper($this->helpers);
		//$this->session = \Config\Services::session();
		$this->security = \Config\Services::security();
		//$this->lang = \App\Mpdels\LangModel;
		$this->locale = service('request')->getLocale();
		//echo $this->locale;
	}

	protected function initView($settingArray){
		$data = array();
		$data["viewName"] = $settingArray['viewName'] ?? false;
		$data["webTitle"] = "CodeHawk - {$settingArray['webTitle']}";
		$data["nav"] =  $settingArray['component'] ?? false;
		$data["component"] =  $settingArray['component'] ?? false;
		$data["language"] = $this->getLanguage($settingArray['component']);
		return view('template',$data);
	}

	private function getLanguage($loadList){
		$lanArray = [];
		foreach ($loadList as $key => $arr) {
			$lanArray[$arr["componentName"]] = lang("{$arr["componentName"]}.lan");
			$lanArray[$arr["componentName"]]["lanName"] = $this->request->getLocale();
		}
		$lanArray["basic"] = lang("basic.lan");
		return $lanArray;
	}

}
