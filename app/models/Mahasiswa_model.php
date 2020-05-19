<?php

class Mahasiswa_model
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function getAllMahasiswa()
	{
		$this->db->query("SELECT * FROM mahasiswa");
		return $this->db->resultAll();
	}

	public function getMahasiswaByNPM($npm)
	{
		$this->db->query("SELECT * FROM mahasiswa WHERE npm=:npm");
		$this->db->bind('npm', $npm);
		return $this->db->singleResult();
	}
}