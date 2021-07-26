<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil- ABE SARL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="img/favicon.ico" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
  <!-- =======================================================
  * Author: NOBISOFT
  * License: NOBISOFT
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  
  <!-- MODAL OF REQUEST PDA -->


  <header id="header" class="fixed-top" >
     <?php require_once("include/header.php");?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
   <?php require_once("include/accueil.banniere.php");?>
  </section><!-- End Hero -->

  <main id="main">
 <!-- ======= About Section ======= -->
    <section id="about" class="about">
     <?php require('include/accueil.aboutus.php'); ?>
    </section><!-- End About Section -->
    

    <!-- ======= Services Section ======= -->
    <?php
    $param=[];

    $param[0]['col']='online';
    $param[0]['val']=1;

    $param[1]['col']='type';
    $param[1]['val']='Service';

    $param[2]['col']='id_entreprise';
    $param[2]['val']=1;
    $data_service=$this->getAllByParam('prestation',$param);
    ?>
    <?php if (!empty($data_service)) { ?>
    <section id="services" class="services">
      <?php require_once("include/accueil.service.php");?>
    </section>
    <?php } ?><!-- End Services Section -->






     <!-- ======= news Section ======= -->
    <!-- chargement de la data actualite -->
   
    <?php if (!empty($data_actualite)) { ?>
    <section id="pricing" class="pricing">
      <?php require_once("include/accueil.actualite.php"); ?>
    </section>
    <?php } ?><!-- End news Section -->


       


  <!-- ======= partners Section ======= -->
  <?php
  $param=[];
  $param[0]['col']='online';
  $param[0]['val']= 1;
  $param[1]['col']= 'type';
  $param[1]['val']= 'partenaire';
  $param[2]['col']= 'id_entreprise';
  $param[2]['val']= 1;
  $data_partner= $this->getAllByParam('reference',$param); 
 ?>
 <?php if (!empty($data_partner)) { ?>
  <section id="testimonials" class="testimonials" style="background-image:linear-gradient(rgba(22, 83, 90, 0.7), rgba(51, 189, 203, 0.9)), url('img/demande_devis.jpg')";>
      <?php require_once("include/accueil.partenaire.php");?>
  </section>
<?php } ?>  
<!-- End partners Section -->
<?php if(!empty($msg)){ ?>
  <div id="d1" style="position:absolute; position:fixed; left:2%; top:40%;   height:auto;width:400px; background-color:#E74C3C; color:#fff; z-index:1; padding:15px 15px 15px 15px; border-radius:5px; font-size:16px; line-height:25px; text-align:center;">
    <div>
      <i class="fa fa-check-circle fa-2x" ></i><br>
        <?= $msg ?>
       
    </div><br>
    <div style="text-align:center; width:100%">
      <button class="btn btn-danger btn-md" id="togg1">Close</button>
    </div>

   
  </div>
    

<?php } ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
  $param=[];
  $param[0]['col'] = 'online';
  $param[0]['val'] = 1;
  $data_entreprise = $this->getAllByparam('entreprise',$param);  
  ?>
  <?php if (!empty($data_entreprise)) { ?>
  <footer id="footer"><?php require("include/footer.php");?></footer>
  <?php } ?>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    
$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 2,
        itemsDesktop : [1199,2],
        itemsMobile : [600,1],
        pagination :true,
        autoPlay : true
    });
    
    $("#news-slider2").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsMobile:[600,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
    
    $("#news-slider3").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[1000,2],
        itemsMobile:[700,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
    
    $("#news-slider4").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsMobile:[600,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
    
    $("#news-slider5").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsMobile:[650,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
    
    $("#news-slider6").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        pagination:false,
        navigationText:false
    });
    
    $("#news-slider7").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [1000,2],
        itemsMobile : [650,1],
        pagination :false,
        autoPlay : true
    });
    
    $("#news-slider8").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        autoPlay:true
    });
    
    $("#news-slider9").owlCarousel({
        items : 3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsTablet:[650,1],
        pagination:false,
        navigation:true,
        navigationText:["",""]
    });
    
    $("#news-slider10").owlCarousel({
        items : 4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
    
    $("#news-slider11").owlCarousel({
        items : 4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        pagination:true,
        autoPlay:true
    });
    
    $("#news-slider12").owlCarousel({
        items : 2,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,1],
        itemsTablet: [600,1],
        itemsMobile : [550,1],
        pagination:true,
        autoPlay:true
    });
    
    $("#news-slider13").owlCarousel({
        navigation : false,
        pagination : true,
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigationText : ["",""]
    });
    
    $("#news-slider14").owlCarousel({
        items : 4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [550,1],
        pagination:false,
        autoPlay:true
    });
});



  </script>
  <script type="text/javascript">
    let togg1 = document.getElementById("togg1");
    let d1 = document.getElementById("d1");
    togg1.addEventListener("click", () => {
    if(getComputedStyle(d1).display != "none"){
     
      $("#d1").fadeTo(2000, 0.0);
    } 
    })
  </script>

  <!-- Modal demande devis -->
  <?php require_once("include/demande_devis.modal.php");?>
 

</body>

</html>