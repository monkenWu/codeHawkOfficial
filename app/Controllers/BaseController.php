<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller{

	protected $helpers = ['url'];
	protected $security;
	protected $session;
	private $lang;

	//Controller建構
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		helper($this->helpers);
		$this->session = \Config\Services::session();
		$this->security = \Config\Services::security();
		//$this->lang = \App\Mpdels\LangModel;
	}

	protected function initView($settingArray){
		$data = array();
		$data["viewName"] = $settingArray['viewName'] ?? false;
		$data["webTitle"] = "CodeHawk - {$settingArray['webTitle']}";
		$data["nav"] =  $settingArray['component'] ?? false;
		$data["component"] =  $settingArray['component'] ?? false;
		return view('template',$data);
	}

}
