<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NelayanKu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="<?php echo base_url();?>/assets/Baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/Baru/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
  
</head>

<body style="background-image: url(<?php echo base_url();?>/assets/img/landing.png); background-position: center;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo base_url('index.php/LandingPage'); ?>">NelayanKu</a></h1>
      

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" >

    <div class="container">
      <form action="<?php echo base_url('index.php/Test/tambah'); ?>" method="post" enctype="multipart/form-data">
            <label><img src="<?php echo base_url();?>/assets/img/nama.png" width="50%" style="float: left;"></label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('username'); ?>">
            <br>
            <label><img src="<?php echo base_url();?>/assets/img/kesulitan.png" width="50%" style="float: left;"></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="kesulitan" id="exampleRadios1" value="Ya" >
              <label class="form-check-label" for="exampleRadios1">
                Ya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="kesulitan" id="exampleRadios2" value="Tidak" >
              <label class="form-check-label" for="exampleRadios2">
                Tidak
              </label>
            </div>
            <br>
            <label><img src="<?php echo base_url();?>/assets/img/dimana.png" width="50%" style="float: left;"></label>
            <select name="provinsi" class="form-control">
              <option>-- Pilih Provinsi Anda --</option>
              <?php
                foreach ($provinsi as $b) {
                  echo '
                    <option value="'.$b->id.'">'.$b->nama.'</option>
                    ';
                }
              ?>                  
            </select>
            <br>
            <label><img src="<?php echo base_url();?>/assets/img/jenis.png" width="50%" style="float: left;"></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Makanan Laut Segar" id="defaultCheck1" name="jenis">
              <label class="form-check-label" for="defaultCheck1">
                Makanan Laut Segar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Makanan Laut Olahan" id="defaultCheck2" name="jenis">
              <label class="form-check-label" for="defaultCheck2">
                Makanan Laut Olahan
              </label>
            </div>
            <br>
            <label><img src="<?php echo base_url();?>/assets/img/harga.png" width="50%" style="float: left;"></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="harga" id="exampleRadios1" value="Kurang dari 50.000" >
              <label class="form-check-label" for="exampleRadios1">
                Kurang dari 50.000
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="harga" id="exampleRadios2" value="51.000-100.000" >
              <label class="form-check-label" for="exampleRadios2">
                51.000-100.000
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="harga" id="exampleRadios3" value="101.000 - 200.000" >
              <label class="form-check-label" for="exampleRadios3">
                101.000 - 200.000
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="harga" id="exampleRadios4" value="Lebih dari 200.000" >
              <label class="form-check-label" for="exampleRadios4">
                Lebih dari 200.000
              </label>
            </div>
            <br>
            <label><img src="<?php echo base_url();?>/assets/img/untuk.png" width="50%" style="float: left;"></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Kesehatan" id="defaultCheck3" name="untuk">
              <label class="form-check-label" for="defaultCheck3">
                Kesehatan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Membuka usaha" id="defaultCheck4" name="untuk">
              <label class="form-check-label" for="defaultCheck4">
                Membuka usaha
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Menambah kecerdasan" id="defaultCheck5" name="untuk">
              <label class="form-check-label" for="defaultCheck5">
                Menambah kecerdasan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Lainnya" id="defaultCheck6" name="untuk">
              <label class="form-check-label" for="defaultCheck6"> 
                Lainnya
              </label>
            </div>
            <br>
            <center><input type="submit" class="btn btn-primary" name="submit" value="SIMPAN"></center>
      </form>
    </div>
  </section><!-- End Hero -->

  <main id="main" >

  </main>
  
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/=-form/validat e.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>/assets/js/main.js"></script>
  <script>
          $(document).ready(function(){
              $("#provinsi").change(function (){
                  var url = "<?php echo site_url('index.php/Test/add_ajax_kab');?>/"+$(this).val();
                  $('#kabupaten').load(url);
                  return false;
              })
     
          ;
      </script>

</body>

</html>