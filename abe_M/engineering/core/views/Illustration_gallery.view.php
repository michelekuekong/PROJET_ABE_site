<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $titre_gallery ?> - ABE SARL</title>
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
          <li><a href="index.php?action=Gallery">Réalisations</a></li>
          <li><?= $titre_gallery ?></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb" >
                 <article class="article">
                      <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row">
   
          <div class="col-md-12">
             <div class="portfolio-details-container" >

          <div class="owl-carousel portfolio-details-carousel" >
        <?php

    
        if (!empty($_GET['id'])) {
          $id = checkInput($_GET['id']);
        }

          $param=[];
          $param[0]['col']='online';
          $param[0]['val']=1;
          $param[1]['col']='id_gallery';
          $param[1]['val']=$id;
          $data_photo=$this->getAllByParam('illustration_gallery',$param); 
       
        ?>

          <?php foreach ($data_photo as $key_p => $value_p) {
            // calcul de @photo
            $lien = trim($value_p->getLien());            ?>
            <img src="<?=$lien?>"  class="img-fluid" alt="">

          <?php } // fin parcour de data_gallery ?>

          </div>

         

        </div>

      
          </div>
           
        </div>

       
      </div>
    </section><!-- End Portfolio Details Section -->


                  </article>

                        
                 
      
                    
                </div>

                <div class="col-lg-4 m-15px-tb blog-aside">
                    <!-- autres service -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Nom de la mission</h3>
                        </div>
                        <div class="widget-body"> 
                        
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <div class="portfolio-info">
          
                                          
                                            <?php
                                            $cathegorie = $this->getColsByCol('gallery','titre','id',$id);
                                          
                                            $resume = $this->getColsByCol('gallery','resume','id',$id);
                                            ?>
                                             <?= (!empty($cathegorie)) ? $cathegorie : "Nom de la mission" ; ?>
                                           
                                        
                                        </div>


                                    </div>
                                   
                                   
                                </div>
                              
                            </div>
                            
                           
                            
                           
                        </div>
                 
                    </div>  
                    <!-- Autre sevice -->

                      <!-- description-->
                    <?php if(!empty($resume)){ ?>
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Description de la mission</h3>
                        </div>
                        <div class="widget-body"> 
                        
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body followus">
                                    <div class="lpa-title">
                                    
                                     <?= $resume ?>                              

                                    </div>
                                    
                                   
                                </div>
                              
                            </div>
                            
                           
                            
                           
                        </div>
                 
                    </div>
                    <?php } ?>
                    <!-- description  -->

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

