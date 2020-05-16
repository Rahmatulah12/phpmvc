<div class="container mt-5">
	<div class="row col-6">
		<h3 class="display-5">Daftar Mahasiswa</h3>
	</div>
	<?php foreach($data["mhs"] as $row): ?>
		<ul>
			<li>
				<?= $row["Nama"]; ?>
			</li>
			<li>
				<?= $row["NPM"]; ?>
			</li>
			<li>
				<?= $row["Email"]; ?>
			</li>
			<li>
				<?= $row["Kelas"]; ?>
			</li>
		</ul>
	<?php endforeach; ?>
</div>