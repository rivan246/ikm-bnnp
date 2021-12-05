<!DOCTYPE html>
<html lang="en"></html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index Kepuasan Masyarakat - BNNP DKI Jakarta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
  <link href="../img/bnn.png" rel="icon">
  <link href="../img/bnn_dki.png" rel="apple-touch-icon">

  <!-- GFonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
		//panggil koneksi database
		include "koneksi.php";

		//tampilkan data dari tabel tikm
		$tampil = mysqli_query($koneksi, "SELECT * from ikm");
		$data = mysqli_fetch_array($tampil);

	?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/bnn_dki.png" alt=""><span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="loginadmin/index.php" class="get-started-btn scrollto" >Admin</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
	
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
	<div class="alert alert-dark" role="alert">
  <h4 class="alert-heading" style="text-align:center">Aplikasi Indeks Kepuasan Masyarakat<Img:srcset></Img:srcset></h4>
  <p> </p>
  <hr>
  <p class="mb-0" style="text-align:center">Digunakan untuk mengetahui Tingkat Kepuasan masyarakat terhadap BNNP DKI Jakarta. Klik Emotikon Dibawah Ini Sesuai Penilaian Anda</p>
</div>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="bg-primary box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2 style="text-align:center">MEMUASKAN</h2>
                <h1 id="data-mati"> [ <?=$data['puas']?> ] </h1>
                <h2>SUARA </h2>
              </div>
                <div class="col-md-4">
                  <a href="simpan.php?ket=puas" title="Jika Anda Merasa Puas dengan Pelayanan kami, Klik Icon ini!">
                    <img src="assets/img/Sangat puas.png" style="width: 110px;">
                  </a>
                </div>
              
            </div>
          </div>
        </div>
 
        <div class="col-md-4">
          <div class="bg-success box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2>CUKUP</h2>
                <h1 id="data-mati"> [ <?=$data['cukup']?> ] </h1>
                <h2>SUARA </h2>
              </div>
              <div class="col-md-4">
                <a href="simpan.php?ket=cukup" title="Jika Anda Merasa Cukup dengan Pelayanan kami, Klik Icon ini!">
                  <img src="assets/img/Puas.png" style="width: 120px;">
                </a>
              </div>
            </div>
          </div>
        </div>
 
        <div class="col-md-4">
          <div class="bg-danger box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2>KURANG</h2>
                <h1 id="data-sembuh"> [ <?=$data['kurang']?> ] </h1>
                <h2>SUARA </h2>
              </div>
              <div class="col-md-4">
                <a href="simpan.php?ket=kurang" title="Jika Anda Merasa Kurang dengan Pelayanan kami, Klik Icon ini!">
                  <img src="assets/img/Tidak puas.png" style="width: 110px;">
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-7 d-flex align-items-stretch">
            <div class="content">
              <h3>Aplikasi Indeks Kepuasan Masyarakat</h3>
              <p>
                Digunakan untuk mengetahui Tingkat Kepuasan masyarakat terhadap BNNP DKI Jakarta, tunjukkan kepuasan anda terhadap pelayanan BNNP DKI Jakarta dengan Klik ikon diatas
              </p>
              <a href="#" class="about-btn"><span>Isi Survey</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

   
   
 
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>IKM</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a>IKM</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>