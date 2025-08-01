<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<form action="/mahasiswa/simpan" method="post">
    <p><input type="text" name="nim" placeholder="NIM" required></p>
    <p><input type="text" name="nama" placeholder="Nama" required></p>
    <p><input type="text" name="prodi" placeholder="Prodi"></p>
    <p><input type="text" name="universitas" placeholder="Universitas"></p>
    <p><input type="text" name="nomor_handphone" placeholder="Nomor HP"></p>
    <p><button type="submit">Simpan</button></p>
</form>

<?= $this->endSection() ?>
