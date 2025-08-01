<?= $this->extend('layouts/index') ?>

<?= $this->section('content') ?>

<div class="main-bg">
  <div class="profile-card">
    <img class="profile-img" src="<?= base_url('assets/img/profil mhs 2.jpg') ?>" alt="Foto Profil">

    <div class="profile-info">
      <strong>Nama:</strong> Hadis Darmawan<br>
      <strong>NIM:</strong> 32602300080<br>
      Mahasiswa Teknik Informatika
    </div>

    <div class="profile-sosmed">
      <a href="#"><img class="icon-sosmed" src="<?= base_url('assets/img/wa.png') ?>" alt="WhatsApp"></a>
      <a href="#"><img class="icon-sosmed" src="<?= base_url('assets/img/email.png') ?>" alt="Email"></a>
      <a href="#"><img class="icon-sosmed" src="<?= base_url('assets/img/instagram.png') ?>" alt="Instagram"></a>
      <a href="#"><img class="icon-sosmed" src="<?= base_url('assets/img/github.png') ?>" alt="GitHub"></a>
    </div>
  </div>
</div>

<footer>

</footer>

<?= $this->endSection() ?>
