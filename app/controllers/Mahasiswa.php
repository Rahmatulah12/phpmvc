<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data["judul"] = "Daftar Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
		$data["jurusan"] = $this->model("Mahasiswa_model")->getJurusan();
		$data["fakultas"] = $this->model("Mahasiswa_model")->getFakultas();
		$this->view("template/header", $data);
		$this->view("mahasiswa/index", $data);
		$this->view("template/footer");
	}

	public function details($npm)
	{
		$data["judul"] = "Detail Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaByNPM($npm);
		$this->view("template/header", $data);
		$this->view("mahasiswa/details", $data);
		$this->view("template/footer");
	}
}