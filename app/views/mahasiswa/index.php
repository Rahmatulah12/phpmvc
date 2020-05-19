<div class="container mt-5">
	<div class="row col-6">
		<h3 class="display-5">Daftar Mahasiswa</h3>
	</div>
	<ul class="list-group" style="width:26rem;">
		<?php foreach($data["mhs"] as $row): ?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?= $row["nama_mhs"]; ?>
				<a href="<?= BASEURL; ?>/mahasiswa/details/<?= $row['npm']; ?>" class="badge badge-success">Details</a href="">
			</li>
		<?php endforeach; ?>
	</ul>
</div>