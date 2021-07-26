<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - ABE SARL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link rel="icon" href="img/favicon.ico" />

  <!-- Google Fonts -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
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
          <li>Contact</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb  blog-grid" >
                    <div class="row"> <!-- row principal -->

                        <!-- <div class="row"> 
                            <div class="col-md-4">
                                <h4>Adresse E-mail</h4>
                                <p>contact@panessgroup.com</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Téléphone</h4>
                                <p>(+237) 693186734 l 699683515 | 676112461</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Adresse Siège</h4>
                                <p>Cameroun - Douala - Akwa</p>
                            </div>
                        </div>  -->

                        <div class="contact-us-form">
                            <div class="col-md-12">
                                <div class="notice notice-danger">
                                    <strong><h3 style="color:#00233d;"><i class="fa fa-phone" style="font-size: 20px;"></i> Contact us</h3></strong> 
                                </div>
                            </div><br>

                            <!-- confirm message -->
                            <?php if(isset($mail_send)){
                                
                                if($mail_send=1){ ?>
                                <div id="msg_confirm" class="text-center col-md-12 alert-success"><i class="fa fa-check text-success"></i>  Message send with success !</div>
                            <?php } else { ?>
                                <div id="msg_confirm" class="text-center col-md-12 alert-warning"><i class="fa fa-times text-danger"></i>  Failed to send !</div>
                            <?php } } ?>

                            <!-- <h2>Envoyer un message</h2> -->

                            <div style="margin-left: 30px;">
                                <form id="contactForm" action="index.php?action=<?= $action ?>&ssaction=send_mail" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <div class="col-md-6"> -->
                                                <div class="input-group">
                                                    <input id="name" name="name" type="text" class="form-control contact-input"  required="" placeholder="Name*">
                                                </div><br>

                                                <div class="input-group">
                                                    <input id="email" name="email" type="email" class="form-control contact-input" required="" placeholder="Email*">
                                                </div><br>
                                                
                                                <div class="input-group">
                                                    <input id="phone" name="phone" type="text" class="form-control contact-input" placeholder="Phone*">
                                                </div><br>

                                                <div class="input-group">
                                                    <input id="Objet" name="subject" type="text" class="form-control contact-input" required="" placeholder="Subject*">
                                                </div><br>
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-group text-area"> 
                                                <textarea id="message" name="message" class="form-control contact-area" rows="9" required placeholder="Message*"></textarea>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="text-center" style="margin-bottom: 20px;">
                                            <button style="width: 300px; border-radius: 30px;" type="submit" class="btn btn-outline-danger btn-lg">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end row principal -->
                </div>

                <div class="col-lg-4 m-15px-tb blog-aside">
                      <!-- follus us-->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Nous suivre</h3>
                        </div>
                        <div class="widget-body"> 
                        
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body followus">
                                    <div class="lpa-title" style="text-align:center;">
                                    
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter text-primary"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-instagram text-danger"></i></a>                               

                                    </div>
                                    
                                   
                                </div>
                              
                            </div>
                            
                           
                            
                           
                        </div>
                 
                    </div>
                    <!-- follus  -->


                </div>
        </div> 
      </div>
  </section>


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