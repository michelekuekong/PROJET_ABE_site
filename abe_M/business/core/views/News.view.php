<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $action ?> - ABE SARL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link rel="icon" href="img/favicon.ico" />


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
            <?php if(isset($theme) && !empty($theme)){ ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?action=<?= $action ?>"><?= $action ?></a></li>
                <li><?=  ucfirst(strtolower($theme)) ?></li>
            <?php } else { ?>
                <li><a href="index.php">Accueil</a></li>
                <li><?= $action ?></li>
            <?php } ?>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="blog-listing gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <div class="row">
                        
                            <?php
                                $nbre_article=count($data_article);
                                if($nbre_article!=0){
                                    if(isset($_GET['page'])){
                                            $page=$_GET['page']; 
                                    }else{
                                        $page=1;
                                    }
                                    $parPage=6;
                                    $nbPage= ceil($nbre_article/$parPage);
                                    if ($page >= $nbPage) 
                                    {
                                        $page_courrante=$nbPage;
                                    }else
                                    {
                                        $page_courrante=$page;
                                    }
                                    if($nbre_article > $parPage){
                                        $premierOfPage= (($page_courrante-1)*$parPage);
                                        $dernierOfPage= (($page_courrante*$parPage));
                                        $dernierOfPage = ($dernierOfPage<$nbre_produit) ? $dernierOfPage : $dernierOfPage-1 ;
                                        
                                    } else {
                                        $premierOfPage= 0;
                                        $dernierOfPage= $nbre_article ;
                                    }
                                ?>
                                <?php for($k =$premierOfPage; $k < $dernierOfPage; $k++) { 
                                    $value=$data_article[$k];
                                    //calcul de @titre
                                    $titre=trim($value->getTitre());
                                    //calcul de @resume
                                    $resume=trim($value->getResume());
                                    //calcul de @id
                                    $id_a=trim($value->getId());

                                    $rubrique = $this->getColsByCol('theme_blog', 'titre', 'id', $value->getId_theme());
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
                                        $image=$data_illustration[0]->getLien();

                                        #parse date
                                        $date = date_parse($value->getDate_creation());
                                        $day = $date['day'];
                                        $month = $date['month'];
                                        $month = strftime("%B",strtotime($value->getDate_creation()));
                                        $mois = utf8_encode($month);
                                    ?>
                                        <div class="col-sm-6" style="margin-bottom: 40px">
                                            <div class="blog-grid" style="height: 100%">
                                                <div class="blog-img">
                                                    <div class="date">
                                                        <span><?= $day ?></span>
                                                        <label><?= substr(strtoupper($mois), 0, 3) ?></label>
                                                    </div>
                                                    <a href="#">
                                                        <img src="<?= (!empty($image)) ? $image : "Mon image" ; ?>" alt="<?= $titre; ?>">
                                                    </a>
                                                </div>
                                                <div class="blog-info">
                                                    <h5><a href="index.php?action=Article&id=<?= $id_a; ?>"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a></h5>
                                                    <p><?= (!empty($resume)) ? $resume : "Mon resume" ; ?></p>
                                                    <div class="btn-bar">
                                                        <a href="index.php?action=Article&id=<?= $id_a; ?>" class="px-btn-arrow">
                                                            <span>Lire l'article</span>
                                                            <i class="arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php } ?>

                                <!-- New pagination -->
                                    <div class="col-12">
                                        <ul class="pagination justify-content-center">
                                            <!-- envoyer la action et la saction -->  
                                            <?php if(isset($_GET['saction'])){ ?>
                                                    <li class="page-item <?php if($page_courrante==1){echo"disabled";} ?>" > <a class="page-link" href="?action=<?php echo $_GET['action'];?>&saction=<?php echo $_GET['saction'] ;?>&page=<?php if($page_courrante!=1){echo ($page_courrante-1); }else{ echo $page_courrante; } ?>">&laquo;</a></li>

                                                    <?php 
                                                        for ($i=1; $i <= $nbPage; $i++) 
                                                        { 
                                                            if ($i==$page_courrante) 
                                                            {?>
                                                            <li class="page-item active"> <a class="page-link" href="?action=<?php echo $_GET['action'];?>&saction=<?php echo $_GET['saction'];?>&page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>

                                                        <?php }else 
                                                            {?>
                                                                <li class="page-item" > <a class="page-link" href="?action=<?php echo $_GET['action'];?>&saction=<?php echo $_GET['saction'];?>&page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>
                                                            <?php }
                                                        } 
                                                    ?>
                                                    <li class="page-item <?php if($page_courrante==$nbPage){echo"disabled";} ?>"  ><a class="page-link" href="?action=<?php echo $_GET['action'];?>&saction=<?php echo $_GET['saction'];?>&page=<?php if ($page_courrante!=$nbPage){echo ($page_courrante+1);}else{echo $page_courrante; } ?>">&raquo;</a></li>
                                                <!-- /envoyer la action et la scat -->  
                                                <?php } else { ?>
                                                <!-- Juste la action exite -->  
                                                <?php if(isset($_GET['action'])){ ?>
                                                
                                                    <li class="page-item <?php if($page_courrante==1){echo"disabled";} ?>" > <a class="page-link" href="?action=<?php echo $_GET['action'];?>&page=<?php if($page_courrante!=1){echo ($page_courrante-1); }else{ echo $page_courrante; } ?>" >&laquo;</a></li>
                                                    <?php 
                                                        for ($i=1; $i <= $nbPage; $i++){ 
                                                            if ($i==$page_courrante) 
                                                            {?>
                                                            <li class="page-item active"> <a class="page-link" href="?action=<?php echo $_GET['action'];?>&page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>

                                                        <?php }else {?>
                                                                <li class="page-item"> <a class="page-link" href="?action=<?php echo $_GET['action'];?>&page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>
                                                            <?php }
                                                        } 
                                                    ?>
                                                    <li class="page-item <?php if($page_courrante==$nbPage){echo"disabled";} ?>"  ><a class="page-link" href="?action=<?php echo $_GET['action'];?>&page=<?php if ($page_courrante!=$nbPage){echo ($page_courrante+1);}else{echo $page_courrante; } ?>">&raquo;</a></li>
                                                <!-- /Juste la action exite -->       
                                                <?php } else { ?>
                                                <!-- Pas de action et de Saction-->  
                                                    <li class="page-item <?php if($page_courrante==1){echo"disabled";} ?>" > <a class="page-link" href="?page=<?php if($page_courrante!=1){echo ($page_courrante-1); }else{ echo $page_courrante; } ?>" >&laquo;</a></li>
                                                        <?php  for ($i=1; $i <= $nbPage; $i++){ ?>
                                                        <?php if ($i==$page_courrante) {?>
                                                            <li class="page-item active"> <a class="page-link" href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>
                                                        <?php }else{?>
                                                            <li class="page-item"> <a class="page-link" href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a> </li>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <li class="page-item <?php if($page_courrante==$nbPage){echo"disabled";} ?>"  ><a class="page-link" href="?page=<?php if ($page_courrante!=$nbPage){echo ($page_courrante+1);}else{echo $page_courrante; } ?>">&raquo;</a></li>
                                                    <?php } ?>
                                                <!-- /Pas de action et de Saction-->  
                                                <?php } ?>
                                        </ul>
                                    </div> 
                                <!-- end new pagination -->
                                
                                <?php }else{ ?>

                                    <div class="col-md-12 alert-warning text-center">
                                        <p>Il n'ya aucun article dans ce rubrique !</p>
                                    </div>
                                <?php } ?>
                        

                        
                    </div>
                </div>

                <div class="col-lg-4 m-15px-tb blog-aside">
                    <!-- Author -->
                    <!-- End Author -->

                    <!-- Trending Post -->
                    <!-- End Trending Post -->

                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <?php 
                            $param = [];
                            $param[0]['col'] = 'online';
                            $param[0]['val'] =1;
                            $data_actualite = $this->getAllByParam("article",$param);
                        ?>
                        <?php if(!empty($data_article)) { ?>
                            <div class="widget-title">
                                <h3>Derniers articles</h3>
                            </div>
                            <div class="widget-body">

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
                      <?php }?>
                    </div>
                    <!-- End Latest Post -->

                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Autres thèmes</h3>
                        </div>
                        <div class="widget-body">
                        <?php 
                        $param=[];
                        $param[0]['col']='online';
                        $param[0]['val']=1;
                        $data_blog=$this->getAllByParam('theme_blog',$param);
                        ?>
                            <div class="nav tag-cloud">
                              <?php foreach ($data_blog as $key => $value) { 
                                //calcul de @id
                                $id_b = trim($value->getId());
                                $titre=trim($value->getTitre()); 
                                ?>
                                <a href="index.php?action=News&id=<?= $id_b; ?>"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a>
                              <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->
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

