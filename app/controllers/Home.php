<?php

class Home extends Controller
{
	public function index()
	{
		$data["nama"] = $this->model("User_model")->getUser();
		$data['judul'] = "Home";
		$data['link'] = BASEURL;
		$this->view('template/header', $data);
		$this->view("home/index", $data);
		$this->view("template/footer");
	}
}