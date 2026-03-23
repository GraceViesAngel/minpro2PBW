<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Grace Vies Angel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="brand-box">
  <h3 class="brand-text">PORTOFOLIO</h3>
</div>

<nav class="navbar navbar-expand-lg custom-navbar navbar-light">
  <div class="container justify-content-end">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">ABOUT ME</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">CERTIFICATES</a></li>
      </ul>
    </div>

  </div>
</nav>

<section id="home" class="hero-section container">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="hero-title">Grace Vies Angel</h1>
      <h2 class="hero-role">Creative Design & Management</h2>

      <p class="hero-desc">
      Mahasiswa Sistem Informasi yang memiliki ketertarikan pada desain kreatif
      serta manajemen diri dan waktu. Saya senang mempelajari bagaimana
      perencanaan yang matang dan pengelolaan yang terstruktur dapat
      mendukung pengembangan usaha maupun karya yang berkelanjutan.
      </p>
    </div>

    <div class="col-lg-6 text-center">
      <div class="image-wrapper">
        <img src="pdh.png" class="img-fluid" alt="Foto Profil">
      </div>
    </div>

  </div>
</section>

<section id="about" class="about-section">
<div class="container">
<h2 class="section-title text-center">About Me</h2>

<div class="row mt-5">

<div class="col-md-4 mb-4">
<div class="about-card">
<h4>Deskripsi Diri</h4>
<p>
Saya merupakan mahasiswa Sistem Informasi yang memiliki minat besar dalam
pengelolaan organisasi dan pengembangan kreativitas digital. Saya terbiasa
bekerja secara terstruktur, teliti, serta mampu beradaptasi dalam berbagai
situasi kerja tim. 

Bagi saya, setiap proses adalah kesempatan untuk belajar dan berkembang.
Saya selalu berusaha memberikan hasil yang tidak hanya fungsional, tetapi
juga memiliki nilai estetika dan kualitas yang baik.
</p>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="about-card">
<h4>Skills</h4>

<div class="skill-item">
<p class="skill-name">Manajemen Organisasi & Event</p>
<div class="skill-bar"><div class="skill-fill" style="width:85%"><span>85%</span></div></div>
</div>

<div class="skill-item">
<p class="skill-name">Desain Grafis</p>
<div class="skill-bar"><div class="skill-fill" style="width:90%"><span>90%</span></div></div>
</div>

<div class="skill-item">
<p class="skill-name">HTML & CSS</p>
<div class="skill-bar"><div class="skill-fill" style="width:80%"><span>80%</span></div></div>
</div>

<div class="skill-item">
<p class="skill-name">Bootstrap 5</p>
<div class="skill-bar"><div class="skill-fill" style="width:80%"><span>80%</span></div></div>
</div>

<div class="skill-item">
<p class="skill-name">Vue JS (Dasar)</p>
<div class="skill-bar"><div class="skill-fill" style="width:80%"><span>80%</span></div></div>
</div>

<div class="skill-item">
<p class="skill-name">Teamwork & Collaboration</p>
<div class="skill-bar"><div class="skill-fill" style="width:90%"><span>90%</span></div></div>
</div>

</div>
</div>

<div class="col-md-4 mb-4">
<div class="about-card">
<h4>Pengalaman</h4>
<ul>
<li>Berkontribusi dalam pengelolaan konten dan dokumentasi pada Divisi COMINFO.</li>
<li>Berperan aktif dalam pelaksanaan program kerja Public Digital 2025.</li>
<li>Mengembangkan ide kreatif melalui Study Club PKM.</li>
<li>Berkolaborasi dalam tugas dan proyek berbasis sistem informasi.</li>
<li>Mengerjakan berbagai desain grafis untuk kebutuhan organisasi dan kegiatan kampus.</li>
</ul>
</div>
</div>

</div>
</div>
</section>

<section id="certificates" class="container cert-section">

<div class="d-flex justify-content-center">
  <h2 class="cert-title fw-bold display-4 mb-5">
    Certificates
  </h2>
</div>

<?php $no=0; while($cert = mysqli_fetch_assoc($query)) : ?>
<div class="cert-item row align-items-center">

<div class="col-md-6">
<img src="<?= $cert['image']; ?>" class="img-fluid cert-img">
</div>

<div class="col-md-6 text-center">
<button class="detail-btn" data-bs-toggle="modal" data-bs-target="#modal<?= $no ?>">
Detail
</button>

<p class="year"><?= $cert['year']; ?></p>

<h4 class="cert-text">
<strong><?= $cert['title']; ?></strong>
</h4>
</div>

</div>
<?php $no++; endwhile; ?>

</section>

<?php
$query2 = mysqli_query($conn, "SELECT * FROM certificates");
$no=0;
while($cert = mysqli_fetch_assoc($query2)) :
?>

<div class="modal fade" id="modal<?= $no ?>" tabindex="-1">
<div class="modal-dialog modal-xl modal-dialog-centered">
<div class="modal-content modal-animate">

<div class="modal-header border-0">
<h5 class="modal-title fw-bold">Detail Sertifikat <?= $cert['year']; ?></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body text-center">
<img src="<?= $cert['image']; ?>" class="img-fluid modal-img">
</div>

</div>
</div>
</div>

<?php $no++; endwhile; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>