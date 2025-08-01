<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<a href="/mahasiswa/tambah"><button>Tambah Data</button></a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Universitas</th>
            <th>Nomor HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($mhs['nim']) ?></td>
            <td><?= esc($mhs['nama']) ?></td>
            <td><?= esc($mhs['prodi']) ?></td>
            <td><?= esc($mhs['universitas']) ?></td>
            <td><?= esc($mhs['nomor_handphone']) ?></td>
            <td>
                <a href="/mahasiswa/edit/<?= $mhs['nim'] ?>">Edit</a>
                |
                <a href="/mahasiswa/hapus/<?= $mhs['nim'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
