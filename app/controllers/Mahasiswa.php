<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data["judul"] = "Daftar Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
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

	public function selectFakultas($id_fakultas)
	{
		 $data["jurusan"] = $this->model("Mahasiswa_model")->getJurusan($id_fakultas);
		$this->view('mahasiswa/selectFakultas', $data);
	}

	public function tambah()
	{
		if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0)
		{
			FlashMessage::setMessage('Data has been', 'saved', 'success');
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		} else {
			FlashMessage::setMessage('Data failed to', 'saved', 'danger');
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		}
	}

	public function delete($npm)
	{
		if($this->model("Mahasiswa_model")->delete($npm) > 0)
		{
			FlashMessage::setMessage('Data has been', 'deleted', 'success');
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		} else {
			FlashMessage::setMessage('Data failed to', 'deleted', 'danger');
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		}
	}

}