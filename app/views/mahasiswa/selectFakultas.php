<option value="0" disabled selected>
    --Pilih Jurusan--
</option>
<?php foreach($data['jurusan'] as $jurusan): ?>
    <option value="<?= $jurusan['id_jurusan']; ?>">
        <?= $jurusan['nm_jurusan']; ?>
    </option>
<?php endforeach; ?>