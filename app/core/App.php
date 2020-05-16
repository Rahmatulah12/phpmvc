<?php

class App
{
	protected $controller = "Home";
	protected $method = "index";
	protected $params = [];
	public function __construct()
	{
		$url = $this->parseURL();
		// controller
		// cek apakah file yang dituju sudah ada
		if(file_exists("../app/controllers/". $url[0] . ".php"))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

		// memanggil controller
		require_once "../app/controllers/" . $this->controller . ".php";
		$this->controller = new $this->controller;

		// method
		if(isset($url[1]))
		{
			if(method_exists($this->controller, $this->method))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		} 

		// params
		if(!empty($url))
		{
			$this->params = array_values($url);
		}

		// jalankan controller dan method, kirimkan parameter jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);

	}

	public function parseURL()
	{
		if(isset($_GET["url"]))
		{
			$url = rtrim($_GET["url"], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
			return $url;
		}
	}
}