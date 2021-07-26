<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>A propos de nous - ABE Sarl</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link rel="icon" href="img/favicon.ico" />


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="">

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
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- =======================================================
  * Author: NOBISOFT
  * License: NOBISOFT
  ======================================================== -->

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
          <li><a href="index.php?#about">A propos de nous</a></li>
          <li><?= $presentation_title ?></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb" >
                 <article class="article">
                          <div class="article-title">
                            <div class=" notice notice-danger">
                            <h2><?= $presentation_title ?></h2>
                          </div>
                          </div>
                       
                     
                        <div class="article-content" style="text-align:justify;">
                          
                        
                            <?= $presentation_description ?>
                           
                         
                        </div>

                         <?php if(!empty($image_presentation)){?>
                          <div class="article-img" style="text-align:right;;" >
                          
                              <img class="img-fluid" style="max-width:25%; max-height:auto" src="<?= $image_presentation ?>" title="DSC MARINE SERVICES SA" alt="<?= $presentation_title ?>">
                    
                            
                        </div>
                        <?php } ?>


                  </article>

                        
                 
      
                    
                </div>
                
                  <div class="col-lg-4 m-15px-tb blog-aside">
                      <!-- autres service -->
                      <?php if(!empty($data_aboutus)){ ?>
                        <div class="widget widget-latest-post">
                            <div class="widget-title">
                                <h3>Autres rubriques</h3>
                            </div>
                            <div class="widget-body"> 
                            
                                <div class="latest-post-aside media">
                                    <div class="lpa-left media-body">
                                        <div class="lpa-title">
                                            <nav class="nav flex-column">
                                              <?php foreach($data_aboutus as $key => $value) : ?>
                                                <a class="nav-link" href="index.php?action=<?=$action?>&id=<?= $value->getId() ?>" <?php if($_GET['id']==$value->getId()){ echo 'style="background:#00233d; color: #fff"';}else{ echo 'style="color: #000;"'; } ?>><i class="fa fa-arrow-right" aria-hidden="true" style="font-weight: bold"></i> <?= $value->getRubrique() ?></a>
                                              <?php endforeach; ?>
                                              
                                            </nav>


                                        </div>
                                      
                                      
                                    </div>
                                  
                                </div>
                                
                              
                                
                              
                            </div>
                    
                        </div>
                      <?php } ?>
                      <!-- Autre sevice -->
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

