<?php

class Mahasiswa_model
{
	// private $mhs = 
	// [
	// 	[
	// 		"Nama" => "Rahmatulah Sidik",
	// 		"NPM" => "201643500855",
	// 		"Email" => "siddiqrahmatullah@gmail",
	// 		"Kelas" => "SE"
	// 	],
	// 	[
	// 		"Nama" => "Zainudin Anwar",
	// 		"NPM" => "201643500856",
	// 		"Email" => "zainudin.anwar@gmail.com",
	// 		"Kelas" => "SE"
	// 	]
	// ];
	private $dbh ;
	private $stmt;

	public function __construct()
	{
		$dsn = "mysql:host=localhost;dbname=phpmvc";
		try
		{
			$this->dbh = new PDO($dsn, "root", "");
		} catch(PDOException $err)
		{
			die($err->getMassage());
		}
	}
	
	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}