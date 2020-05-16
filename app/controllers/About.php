<?php

class About extends Controller
{
	public function index($nama = "rahmat", $pekerjaan="gojek")
	{
		$data["judul"] = "About Me";
		$data['link'] = BASEURL . '/about';
		$data["nama"] = $nama;
		$data["pekerjaan"] = $pekerjaan;
		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footer');
	}

	public function page()
	{
		$data["judul"] = "My Pages";
		$data['link'] = BASEURL . '/about/page';
		$this->view('template/header', $data);
		$this->view("about/page");
		$this->view('template/footer');
	}
}