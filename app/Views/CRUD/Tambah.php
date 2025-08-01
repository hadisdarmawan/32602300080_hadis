

<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')) : ?>
    <div class="alert-danger">
        <ul class="error-list">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="title">
    <h1>Tambah Data Mahasiswa</h1>
</div>

<div class="form">
    <form action="<?= base_url('crud/tambah'); ?>" method="post">
        <div class="input">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="<?= old('nim'); ?>" required>
        </div>
        <div class="input">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?= old('nama'); ?>" required>
        </div>
        <div class="input">
            <label for="prodi">Prodi</label>
            <input type="text" name="prodi" id="prodi" value="<?= old('prodi'); ?>">
        </div>
        <div class="input">
            <label for="universitas">Universitas</label>
            <input type="text" name="universitas" id="universitas" value="<?= old('universitas'); ?>">
        </div>
        <div class="input">
            <label for="nomor_handphone">Nomor HP</label>
            <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= old('nomor_handphone'); ?>">
        </div>
        <div class="button">
            <button type="submit">Tambah Data</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
