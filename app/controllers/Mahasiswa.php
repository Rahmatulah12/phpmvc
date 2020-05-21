<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data["judul"] = "Daftar Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
		// $data["jurusan"] = $this->model("Mahasiswa_model")->getJurusan();
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

	public function tambah()
	{
		if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0)
		{
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		}
	}

	public function selectFakultas($id_fakultas)
	{
		 $data["jurusan"] = $this->model("Mahasiswa_model")->getJurusan($id_fakultas);
		$this->view('mahasiswa/selectFakultas', $data);
	}

}