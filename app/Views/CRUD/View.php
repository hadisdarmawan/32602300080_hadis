<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
</div>
<div class="table">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Universitas</th>
            <th>No hp</th>
            <th>Action</th>
</tr>
<tr>
    <td>1</td>
    <td>Hadis Darmawan</td>
    <td>082329668350</td>
    <td>Teknik Informatika</td>
    <td>Unissula</td>
    <td>32602300080</td>
    <td class ="action">
        <a href ="#"><button class="btn-delete">Delete</button></a>
        <a href ="#"><button class="btn-update">Update</button></a>
</td>
</tr>
</table>
</div>
</main>

<?= $this->endSection(); ?>


