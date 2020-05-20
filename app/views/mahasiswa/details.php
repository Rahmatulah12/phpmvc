<div class="card mt-2" style="width: 26rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?= $data["judul"]; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <label>
            NPM :
        </label>
        <?= $data['mhs']["npm"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <label >
            Nama Mahasiswa :
        </label>
        <?= $data['mhs']["nama_mhs"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <label >
            Jurusan :
        </label>
        <?= $data['mhs']["jurusan"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <label >
            Semester :
        </label>
        <?= $data['mhs']["semester"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <label >
            Kelas :
        </label>
        <?= $data['mhs']["kelas"]; ?>
    </h6>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">&lt;&lt; Back</a>
  </div>
</div>