<?php

class Router{
	protected $router = [];

	public static function load($file){
		$router = new static;
		require $file;
		return $router;
	}

	public function define($routes){
		$this->router = $routes;
	}

	public function direct($uri){
		if(array_key_exists($uri, $this->router)){
			return $this->router[$uri];
		}else{
			throw new Exception("No route defined for this URI $uri");
		}
	}

}