<?php
namespace App\Controllers;

class Home extends BaseController{
	
	private $component = [
		[
			"navName" => "簡介",
			"componentName" => "brief"
		],
		[
			"navName" => "版本消息",
			"componentName" => "version"
		],
		[
			"navName" => false,
			"componentName" => "image"
		],
		[
			"navName" => "介紹",
			"componentName" => "product"
		],
		[
			"navName" => "特色",
			"componentName" => "feature"
		]
	];

	public function index(){
		$setView = [
			"viewName" => "home",
			"webTitle" => "首頁",
			"component" => $this->component
		]; 
		return $this->initView($setView);
	}

	public function lang($langCode=""){
		$setView = [
			"viewName" => "home",
			"webTitle" => "首頁",
			"component" => [
				[
					"navName" => "簡介",
					"componentName" => "brief"
				],
				
			]
		]; 
		return $this->initView($setView);
	}

}
