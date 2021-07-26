<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Réalisations - ABE SARL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Author: NOBISOFT
  * License: NOBISOFT
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
     <?php require_once("include/header.php");?>
   </header><!-- End Header -->

        <!-- ======= Breadcrumbs ======= -->
    <section style="margin-top: 120px" id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Accueil</a></li>
          <li>Réalisations</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        
        <?php $y=0; ?>
          <div class="row">
        <?php foreach ($data_gallery as $key => $value) {
          $y=$y+100;
          //calcul @titre galerie
          $titre = trim($value->getTitre());
          //calcul @id gallery
          $id = trim($value->getId());
          //calcul @description
          $description = trim($value->getResume());
          //calcul @Date_creation
          $date = trim($value->getDate_creation());
          //une photo couverture
          //une photo couverture
          $param[0]['col']='online';
          $param[0]['val']=1;

          $param[1]['col']='id_gallery';
          $param[1]['val']=$id;
          $data_lien_photo=$this->getAllByParam('illustration_gallery',$param);
          if(!empty($data_lien_photo)){
            $index_tab=rand(0,count($data_lien_photo));
            $lien = $this->getColsByCol('illustration_gallery','lien','id',$index_tab);
          }else {
             $lien='';
          }

          ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="index.php?action=illustration_gallery&id=<?= $id ?>">
              <img src="<?= $lien ?>"  style="max-height: 100%; max-width: 100% ; border-radius: 20px" class="img-fluid img-thumbnail" alt="">
            </a>
            <div class="portfolio-info">
              <h4><a href="index.php?action=Illustration_gallery&id=<?= $id ?>"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a></h4>
              <a href="<?= (!empty($lien)) ? $lien : "Ma photo" ; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= (!empty($titre)) ? $titre : "Mon titre" ; ?>"><i class="bx bx-plus"></i></a>
              <a href="index.php?action=Illustration_gallery&id=<?= $id ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <?php } // fin parcour de data_gallery ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer"><?php require("include/footer.php");?></footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <!-- Modal demande devis -->
  <?php require_once("include/demande_devis.modal.php");?>

</body>

</html>