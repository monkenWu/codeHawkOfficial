<?php
namespace App\Controllers;

class Home extends BaseController{
	
	private $component;

	public function __construct(){
		$this->component = [
			[
				"haveNav" => true,
				"componentName" => "brief"
			],
			[
				"haveNav" => true,
				"componentName" => "version"
			],
			[
				"haveNav" => false,
				"componentName" => "image"
			],
			[
				"haveNav" => true,
				"componentName" => "product"
			],
			[
				"haveNav" => true,
				"componentName" => "feature"
			],
			[
				"haveNav" => false,
				"componentName" => "news"
			]
		];
	}
	
	public function index(){
		$setView = [
			"viewName" => "home",
			"webTitle" => "首頁",
			"component" => $this->component
		]; 
		return $this->initView($setView);
	}

}
