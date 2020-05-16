<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data["judul"] = "Daftar Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
		$this->view("template/header", $data);
		$this->view("mahasiswa/index", $data);
		$this->view("template/footer");
	}
}