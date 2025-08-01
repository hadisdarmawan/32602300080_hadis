<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<form action="/mahasiswa/update" method="post">
    <p><input type="text" name="nim" value="<?= esc($mhs['nim']) ?>" readonly></p>
    <p><input type="text" name="nama" value="<?= esc($mhs['nama']) ?>" required></p>
    <p><input type="text" name="prodi" value="<?= esc($mhs['prodi']) ?>"></p>
    <p><input type="text" name="universitas" value="<?= esc($mhs['universitas']) ?>"></p>
    <p><input type="text" name="nomor_handphone" value="<?= esc($mhs['nomor_handphone']) ?>"></p>
    <p><button type="submit">Update</button></p>
</form>

<?= $this->endSection() ?>
