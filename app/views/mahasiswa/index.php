<div class="container mt-5">
	<div class=" row col-6 mb-2">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
			Tambah Data Mahasiswa
		</button>
	</div>
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






<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="TambahDataMahasiswa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahDataMahasiswa">
			Tambah Data Mahasiswa
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-danger">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
			<div class="form-group">
				<label for="nama_mhs">
					Nama Mahasiswa
				</label>
				<input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="masukan nama lengkap mahasiswa..." autocomplete="off">
			</div>
			<div class="form-group">
				<label for="npm">
					Nomor Pokok Mahasiswa
				</label>
				<input type="text" class="form-control" id="npm" name="npm" placeholder="masukan nomor pokok mahasiswa(npm)..." autocomplete="off">
			</div>
			<div class="form-group">
				<label for="jurusan">
					Jurusan
				</label>
				<select class="form-control" name="jurusan" id="jurusan">
					<option value="default" disabled selected>
						--Pilih Jurusan--
					</option>
					<?php foreach($data['jurusan'] as $jurusan): ?>
						<option value="<?= $jurusan['id_jurusan']; ?>">
							<?= $jurusan['nm_jurusan']; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"
		name="tambah">
			Tambah Data
		</button>
		</form>
      </div>
    </div>
  </div>
</div>