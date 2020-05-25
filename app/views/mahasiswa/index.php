<div class="container mt-5">
	<div class="col-lg-6">
		<?php FlashMessage::flash(); ?>
	</div>
	<div class=" row col-lg-6 mb-2">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
			Tambah Data Mahasiswa
		</button>
	</div>
	<div class="row col-6">
		<h3 class="display-5">Daftar Mahasiswa</h3>
	</div>
	<ul class="list-group" style="width:26rem;">
		<?php foreach($data["mhs"] as $mhs): ?>
			<li class="list-group-item">
				<?= $mhs["nama_mhs"]; ?>
				<a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['npm']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Delete</a>
				<a href="<?= BASEURL; ?>/mahasiswa/details/<?= $mhs['npm']; ?>" class="badge badge-success float-right ml-1">Details</a>
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
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
			<div class="form-group">
				<label for="nama_mhs">
					Nama Mahasiswa
				</label>
				<input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="masukan nama lengkap mahasiswa..." autocomplete="off" autofocus>
				<span id="nama" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
			<div class="form-group">
				<label for="npm">
					Nomor Pokok Mahasiswa
				</label>
				<input type="number" class="form-control" id="npm" name="npm" placeholder="masukan nomor pokok mahasiswa(npm)..." autocomplete="off">
				<span id="checkNpm" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
			<div class="form-group">
				<label for="fakultas">
					Fakultas
				</label>
				<select class="form-control" name="fakultas" id="fakultas">
					<option value="0" disabled selected>
						--Pilih Fakultas--
					</option>
					<?php foreach($data['fakultas'] as $fakultas): ?>
						<option value="<?= $fakultas['id_fakultas']; ?>">
							<?= $fakultas['nm_fakultas']; ?>
						</option>
					<?php endforeach; ?>
				</select>
				<span id="checkFakultas" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
			<div class="form-group">
				<label for="jurusan">
					Jurusan
				</label>
				<select class="form-control" name="jurusan" id="jurusan">
					<option value="0" disabled selected>
						--Pilih Jurusan--
					</option>
				</select>
				<span id="checkJurusan" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
			<div class="form-group">
				<label for="semester">
					Semester
				</label>
				<input type="number" class="form-control" id="semester" name="semester" autocomplete="off">
				<span id="checkSemester" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
			<div class="form-group">
				<label for="kelas">
					Kelas
				</label>
				<select class="form-control" name="kelas" id="kelas">
					<option value="0" disabled selected>
						--Pilih Kelas--
					</option>
					<option value="Reguler Pagi">
						Reguler Pagi
					</option>
					<option value="Reguler Sore">
						Reguler Sore
					</option>
				</select>
				<span id="checkKelas" class="form-text text-danger" style="font-size: 14px;"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">
			Tambah Data
		</button>
		</form>
      </div>
    </div>
  </div>
</div>