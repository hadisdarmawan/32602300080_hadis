<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
</div>
<div class="form">
    <form action="/crud/editan" method="POST">
        <div class="input">
            <label for="nim">Nim</label>
            <input type="text" id="nim">
</div>
<div class="input">
            <label for="nama">Nama</label>
            <input type="text" id="nama">
</div>
<div class="input">
            <label for="prodi">Prodi</label>
            <input type="text" id="prodi">
</div>
<div class="input">
            <label for="univ">Universitas</label>
            <input type="text" id="univ">
</div>
<div class="input">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" id="no_hp">
</div>
<div class="button">
    <button type="submit" valu="Submit">Submit</button>
</div>
</form>
</div>

</main>

<?= $this->endSection(); ?>


