<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $theme_article ?> - ABE SARL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="img/favicon.ico" />

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
          <li><a href="index.php?action=News">Actualité</a></li>
          <li><a href="index.php?action=News&id=<?= $id_theme ?>"><?= $theme ?></a></li>
          <li><?= $theme_article ?></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">
        <div class="blog-single gray-bg">
          <div class="container">
              <div class="row align-items-start">
                  <div class="col-lg-8 m-15px-tb">
                    
                    <?php foreach ($data_article as $key => $value) { 
                      //calul de @titre
                      $titre = trim($value->getTitre());
                      //calcul de @contenu
                      $contenu = trim($value->getContenu());
                      //calcul de @date
                      $date = date_format(date_create($value->getDate_creation()), 'd F Y');
                      //calcul de @id
                      $id_a=trim($value->getId());
                      //calcul de @auteur
                      $auteur=trim($value->getAuteur());
                      //calcul de @source
                      $source=trim($value->getSource());
                      ?>
                      <?php
                      $param=[];
                      $param[0]['col']='online';
                      $param[0]['val']=1;
                      $param[1]['col']='type';
                      $param[1]['val']="image";
                      $param[2]['col']='id_article';
                      $param[2]['val']=$id_a;
                      $data_illustration=$this->getAllByParam('illustration_article',$param);
                      $image=trim($data_illustration[0]->getLien());
                      ?>
                      <article class="article">
                          

                          <div class="post-thumbnail">
                                <div id="blog-post-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <?php foreach($data_illustration as $k => $image) : ?>
                                            <div class="item <?= ($k==0) ? 'active' : '' ?>">
                                                <img src="<?= $image->getLien() ?>" class="img-responsive " alt="<?= $titre ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Controls -->
                                    <!-- <a class="left carousel-control" href="#blog-post-carousel" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#blog-post-carousel" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                    </a> -->
                                </div>
                            </div><!-- /.post-thumbnail -->

                          <div class="article-title">
                              <h6><a href="index.php?action=News&id=<?= $id_theme ?>"><?= $theme ?></a></h6>
                              <h2><?= $titre ?></h2>
                              <div class="media">
                                  <div class="avatar">
                                      <img src="img/avatar.jpg" title="" alt="">
                                  </div>
                                  <div class="media-body">
                                      <label><?= (!empty($auteur)) ? $auteur : "auteur" ; ?></label>
                                      <span><?= (!empty($date)) ? $date : "Ma date" ; ?></span>
                                  </div>
                              </div>
                          </div>
                          <div class="article-content"><p style="text-align: justify;"><?= (!empty($contenu)) ? $contenu : "MOn contenu" ; ?></p></div>
                          <div class="nav tag-cloud">
                            <?php 
                            $param=[];
                            $param[0]['col']='online';
                            $param[0]['val']=1;
                            $data_blog=$this->getAllByParam('theme_blog',$param);
                            ?>
                            <?php foreach ($data_blog as $key => $value) { 
                              //calcul de @id
                              $id_b = trim($value->getId());
                              $titre=trim($value->getTitre()); 
                              ?>
                              <a href="index.php?action=News&saction=<?= $titre; ?>"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a>
                            <?php } ?>
                          </div>
                      </article>

                    <?php } ?>
                  </div>
                  <div class="col-lg-4 m-15px-tb blog-aside">
                      
                      <!-- Latest Post -->
                      <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Derniers articles</h3>
                        </div>
                        <div class="widget-body">
                        <?php 
                        $param = [];
                        $param[0]['col'] = 'online';
                        $param[0]['val'] =1;
                        $data_actualite = $this->getAllByParam("article",$param);
                        ?>

                        <?php 
                            //recuperer les dates des articles dans un tableau
                            $tab=[];
                            foreach($data_actualite as $key => $value){
                                $tab[$key][0] = $value->getDate_creation();
                                $tab[$key][1] = $value->getId();
                            }
                            // Tri par ordre decroissant des dates dans le tableau
                            $tmp = 0;
                            $taille = count($tab[0]);
                            for($i=0; $i<$taille; $i++) {
                                for($j=0; $j < (($taille-1)-$i); $j++) {
                                    if($tab[0][$j] < $tab[0][$j+1]) {
                                        $tmp = $tab[0][$j+1];
                                        $tab[0][$j+1]=$tab[0][$j];
                                        $tab[0][$j]=$tmp;
                                    }
                                }
                                }
                            ?>

                                <!-- AFFICHAGE DES DEUX ARTICLES LES PLUS RECENTS -->
                            <?php $r=0; ?>
                            <?php while($r<3){ ?>
                            <?php 
                                if(!empty($tab[$r])) { //verifie si le premier item n'est pas vide
                                    $data_actualite=[];
                                    $param=[];
                                    $param[0]['col'] = 'date_creation';
                                    $param[0]['val'] = $tab[$r][0];
                                    $param[1]['col'] = 'id';
                                    $param[1]['val'] = $tab[$r][1];
                                    $data_actualite = $this->getAllByParam("article",$param);
                            ?>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>"><?= $data_actualite[0]->getTitre(); ?></a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>">
                                            <?= $data_actualite[0]->getTitre() ?>
                                        </a>
                                        <a class="date" href="#">
                                        <?= date_format(date_create($data_actualite[0]->getDate_creation()), 'd F Y') ?>
                                        </a>
                                    </div>
                                </div>
                                <?php 
                                $data_illustration=[];
                                $param = [];
                                $param[0]['col']='online';
                                $param[0]['val']=1;
                                $param[0]['col']='id_article';
                                $param[0]['val']=$data_actualite[0]->getId();
                                $data_illustration = $this->getAllByParam("illustration_article",$param);
                                ?>
                                <div class="lpa-right">
                                    <a href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>">
                                        <img style="max-height: 100% ; max-width: 100%;" src="<?= $data_illustration[0]->getLien(); ?>" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        <?php $r++; } ?>
                        </div>
                    </div>
                      <!-- End Latest Post -->
                      <!-- widget Tags -->
                      <div class="widget widget-tags">
                          <div class="widget-title">
                              <h3>Autres thèmes</h3>
                          </div>
                          <div class="widget-body">
                              <div class="nav tag-cloud">
                              <?php 
                              $param=[];
                              $param[0]['col']='online';
                              $param[0]['val']=1;
                              $data_blog=$this->getAllByParam('theme_blog',$param);
                              ?>
                              <?php foreach ($data_blog as $key => $value) { 
                                //calcul de @id
                                $id_b = trim($value->getId());
                                $titre=trim($value->getTitre()); 
                                ?>
                                <a href="index.php?action=News&saction=<?= $titre; ?>"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a>
                              <?php } ?>
                              </div>
                          </div>
                      </div>
                      <!-- End widget Tags -->
                  </div>
              </div>
          </div>
      </div>

  </section><!-- End Article Section -->

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