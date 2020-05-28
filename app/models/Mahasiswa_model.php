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
		";
		$this->db->query($query);
		return $this->db->resultAll();
	}

	public function getMahasiswaByNPM($npm)
	{
		$query = "
				SELECT m.nama_mhs AS nama_mhs, m.npm AS npm,
				m.id_fakultas AS id_fakultas, m.id_jurusan AS id_jurusan,
				j.nm_jurusan AS jurusan, m.semester AS semester,
				m.kelas AS kelas, f.nm_fakultas AS fakultas FROM phpmvc.mahasiswa AS m
				INNER JOIN
				phpmvc.jurusan AS j
				ON m.id_jurusan = j.id_jurusan
				INNER JOIN
				fakultas AS f
				ON j.id_fakultas = f.id_fakultas
				WHERE m.npm =:npm
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

	public function tambahDataMahasiswa($data)
	{
		// if($data['nama_mhs'] == null || $data['npm'] == null || $data["semester"] == null || $data["fakultas"] == 0 || $data["jurusan"] == 0 || $data['kelas'] == 0)
		// {
		// 	return 0;
		// } else
		// {
			$query = "
				INSERT INTO mahasiswa(nama_mhs, npm, id_fakultas, id_jurusan, semester, kelas)
				VALUES
				(:nama_mhs, :npm, :id_fakultas, :id_jurusan, :semester, :kelas)
			";
			$this->db->query($query);
			$this->db->bind('nama_mhs', $data['nama_mhs']);
			$this->db->bind('npm', $data['npm']);
			$this->db->bind('id_fakultas', $data['fakultas']);
			$this->db->bind('id_jurusan', $data['jurusan']);
			$this->db->bind('semester', $data['semester']);
			$this->db->bind('kelas', $data['kelas']);
			$this->db->execute();
			return $this->db->rowCount();
		// }
	}

	public function updateData($data)
	{
		$query = "
				UPDATE mahasiswa SET
				nama_mhs = :nama_mhs,
				npm = :npm,
				id_fakultas= :id_fakultas,
				id_jurusan = :id_jurusan,
				semester = :semester,
				kelas = :kelas
				WHERE npm = :npm
			";
			$this->db->query($query);
			$this->db->bind('nama_mhs', $data['nama_mhs']);
			$this->db->bind('npm', $data['npm']);
			$this->db->bind('id_fakultas', $data['fakultas']);
			$this->db->bind('id_jurusan', $data['jurusan']);
			$this->db->bind('semester', $data['semester']);
			$this->db->bind('kelas', $data['kelas']);
			$this->db->bind('npm', $data['npm']);
			$this->db->execute();
			return $this->db->rowCount();
	}

	public function delete($npm)
	{
		$query = "DELETE FROM mahasiswa WHERE npm = :npm";
		$this->db->query($query);
		$this->db->bind('npm', $npm);
		$this->db->execute();

		return $this->db->rowCount();
		// return 0;
	}

}