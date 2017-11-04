<?php

class Router{
	public $router = [
		'GET' => [],
		'POST' =>[]
	];

	public static function load($file){
		$router = new static;
		require $file;
		return $router;
	}
	public function get($uri, $controller){
		$this->router['GET'][$uri] = $controller;
	}

	public function post($uri, $controller){
		$this->router['POST'][$uri] = $controller;
	}
	public function define($routes){
		$this->router = $routes;
	}

	public function direct($uri,$requestType){
		if(array_key_exists($uri, $this->router[$requestType])){
			return $this->router[$uri];
		}else{
			throw new Exception("No route defined for this URI $uri");
		}
	}

}