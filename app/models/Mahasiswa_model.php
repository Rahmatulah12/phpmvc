<?php

class Mahasiswa_model
{
	private $mhs = 
	[
		[
			"Nama" => "Rahmatulah Sidik",
			"NPM" => "201643500855",
			"Email" => "siddiqrahmatullah@gmail",
			"Kelas" => "SE"
		],
		[
			"Nama" => "Zainudin Anwar",
			"NPM" => "201643500856",
			"Email" => "zainudin.anwar@gmail.com",
			"Kelas" => "SE"
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}