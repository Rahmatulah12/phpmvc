<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data["judul"] = "Daftar Mahasiswa";
		$data["link"] = BASEURL . "/mahasiswa";
		$data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
		$data["fakultas"] = $this->model("Mahasiswa_model")->getFakultas();
		$data['jurusan'] = $this->model('Mahasiswa_model')->getJurusan();
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

	// public function selectFakultas()
	// {
	// 	echo json_encode($this->model('Mahasiswa_model')->getJurusan($_POST['id']));
	// }

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

	public function update()
	{
		if($this->model('Mahasiswa_model')->updateData($_POST) > 0)
		{
			FlashMessage::setMessage('Data has been', 'updated', 'success');
			header("Location: " . BASEURL . "/mahasiswa");
			exit;
		} else {
			FlashMessage::setMessage('Data failed to', 'updated', 'danger');
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

	public function getMahasiswaByNpm()
	{
		echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByNPM($_POST['npm']));
	}

}