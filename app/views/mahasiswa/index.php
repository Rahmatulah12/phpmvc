<div class="container mt-5">
	<div class="row col-6">
		<h3 class="display-5">Daftar Mahasiswa</h3>
	</div>
	<?php foreach($data["mhs"] as $row): ?>
		<ul>
			<li>
				<?= $row["nama_mhs"]; ?>
			</li>
			<li>
				<?= $row["npm"]; ?>
			</li>
			<li>
				<?= $row["jurusan"]; ?>
			</li>
			<li>
				<?= $row["semester"]; ?>
			</li>
			<li>
				<?= $row["kelas"]; ?>
			</li>
		</ul>
	<?php endforeach; ?>
</div>