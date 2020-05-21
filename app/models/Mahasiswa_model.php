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
		$query = "
		SELECT m.nama_mhs AS nama_mhs, m.npm AS npm,
		j.nm_jurusan AS jurusan, m.semester AS semester,
		m.kelas AS kelas, f.nm_fakultas AS fakultas FROM phpmvc.mahasiswa AS m
		INNER JOIN
		phpmvc.jurusan AS j
		ON m.id_jurusan = j.id_jurusan
		INNER JOIN
		fakultas AS f
		ON j.id_fakultas = f.id_fakultas
		GROUP BY j.id_jurusan
		ORDER BY j.id_fakultas
		";
		$this->db->query($query);
		return $this->db->resultAll();
	}

	public function getMahasiswaByNPM($npm)
	{
		$query = "
				SELECT m.nama_mhs AS nama_mhs, m.npm AS npm,
				j.nm_jurusan AS jurusan, m.semester AS semester,
				m.kelas AS kelas, f.nm_fakultas AS fakultas FROM phpmvc.mahasiswa AS m
				INNER JOIN
				phpmvc.jurusan AS j
				ON m.id_jurusan = j.id_jurusan
				INNER JOIN
				fakultas AS f
				ON j.id_fakultas = f.id_fakultas
				WHERE m.npm =:npm
				GROUP BY j.id_jurusan
				ORDER BY j.id_fakultas
		";
		$this->db->query($query);
		$this->db->bind('npm', $npm);
		return $this->db->singleResult();
	}

	public function getFakultas()
	{
		$query = "
			SELECT * FROM fakultas
		";
		$this->db->query($query);
		return $this->db->resultAll();
	}

	public function getJurusan()
	{
		$query = "
			SELECT * FROM jurusan
			GROUP BY id_jurusan
			ORDER BY id_fakultas
		";
		$this->db->query($query);
		return $this->db->resultAll();
	}
}