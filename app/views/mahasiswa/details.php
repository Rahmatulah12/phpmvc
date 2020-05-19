<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?= $data['mhs']["nama_mhs"]; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?= $data['mhs']["npm"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <?= $data['mhs']["jurusan"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <?= $data['mhs']["semester"]; ?>
    </h6>
    <h6 class="card-text text-muted">
        <?= $data['mhs']["kelas"]; ?>
    </h6>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">&lt;&lt; Back</a>
  </div>
</div>