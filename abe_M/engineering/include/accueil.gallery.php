
<div class="container" data-aos="fade-up">

  <div class="section-title">
    <h3>Gallery</h3>
    <p>Check our Gallery</p>
  </div>

  <div class="row">
  <?php 
      //recuperer les dates des articles dans un tableau
      $tab=[];
      foreach($data_gallery as $key => $value){
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
  <?php 
      if(!empty($tab[1])) { //verifie si le second item n'est pas vide
          $data_gallery=[];
          $param=[];
          $param[0]['col'] = 'date_creation';
          $param[0]['val'] = $tab[1][0];
          $param[1]['col'] = 'id';
          $param[1]['val'] = $tab[1][1];
          $data_gallery = $this->getAllByParam("gallery",$param);
          $titre = trim($data_gallery[0]->getTitre());
          $resume = trim($data_gallery[0]->getResume());
          $date_creation = trim($data_gallery[0]->getDate_creation());
          $date = date_parse($date_creation);
          $day = $date['day'];
          $annee = $date['year'];
          setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
          $month = strftime("%B",strtotime($date_creation));
          $mois = utf8_encode($month);
          $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " ";  
          $id = trim($data_gallery[0]->getId());
          $lien = $this->getColsByCol('illustration_gallery', 'lien', 'id_gallery', $id);
  ?>
  <div class="col-lg-4 d-flex align-items-stretch">
      <div class="box" style="width: 100%" data-aos="zoom-in" data-aos-delay="<?= $y ?>">

        <h3 style="text-align: center;"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></h3>
        <h4><span><?= (!empty($date_format)) ? $date_format : "Ma date" ; ?></span></h4>
        <img src="<?= (!empty($lien)) ? $lien : "Aucune image" ; ?>"  style="max-height: 100%; max-width: 100%; border-radius: 20px" class="img-fluid img-thumbnail">
        <p style="margin-top: 20px; text-align: center;"><?= (!empty($resume)) ? $resume : "Mon resume" ; ?></p>
        <a href="index.php?action=Illustration_gallery&id=<?= $id ?>" class="get-started-btn" style="max-width: 100%; text-align: center; padding: 5px 20px; margin: 0px">Get Started</a>
      </div>
    </div>
<?php } ?>
  <?php 
      if(!empty($tab[0])) { //verifie si le second item n'est pas vide
          $data_illusgallery=[];
          $param=[];
          $param[0]['col'] = 'date_creation';
          $param[0]['val'] = $tab[0][0];
          $param[1]['col'] = 'id';
          $param[1]['val'] = $tab[0][1];
          $data_gallery = $this->getAllByParam("gallery",$param);
          $titre = trim($data_gallery[0]->getTitre());
          $resume = trim($data_gallery[0]->getResume());
          $date_creation = trim($data_gallery[0]->getDate_creation());
          $date = date_parse($date_creation);
          $day = $date['day'];
          $annee = $date['year'];
          setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
          $month = strftime("%B",strtotime($date_creation));
          $mois = utf8_encode($month);
          $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " ";  
          $id = trim($data_gallery[0]->getId());
          $lien = $this->getColsByCol('illustration_gallery', 'lien', 'id_gallery', $id);
                  ?>
   <div class="col-lg-4 d-flex align-items-stretch">
      <div class="box" style="width: 100%" data-aos="zoom-in" data-aos-delay="<?= $y ?>">

        <h3 style="text-align: center;"><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></h3>
        <h4><span><?= (!empty($date_format)) ? $date_format : "Ma date" ; ?></span></h4>
        <img src="<?= (!empty($lien)) ? $lien : "Aucune image" ; ?>"  style="max-height: 100%; max-width: 100%; border-radius: 20px" class="img-fluid img-thumbnail">
        <p style="margin-top: 20px; text-align: center;"><?= (!empty($resume)) ? $resume : "Mon resume" ; ?></p>
        <a href="index.php?action=Illustration_gallery&id=<?= $id ?>" class="get-started-btn" style="max-width: 100%; text-align: center; padding: 5px 20px; margin: 0px">Get Started</a>
      </div>
    </div>
<?php } ?>
  <?php 
      if(!empty($tab[2])) { //verifie si le second item n'est pas vide
          $data_illusgallery=[];
          $param=[];
          $param[0]['col'] = 'date_creation';
          $param[0]['val'] = $tab[2][0];
          $param[1]['col'] = 'id';
          $param[1]['val'] = $tab[2][1];
          $data_gallery = $this->getAllByParam("gallery",$param);
          $titre = trim($data_gallery[0]->getTitre());
          $resume = trim($data_gallery[0]->getResume());
          $date_creation = trim($data_gallery[0]->getDate_creation());
          $date = date_parse($date_creation);
          $day = $date['day'];
          $annee = $date['year'];
          setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
          $month = strftime("%B",strtotime($date_creation));
          $mois = utf8_encode($month);
          $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " ";  
          $id = trim($data_gallery[0]->getId());
          $lien = $this->getColsByCol('illustration_gallery', 'lien', 'id_gallery', $id);
  ?>
   <div class="col-lg-4 d-flex align-items-stretch">
      <div class="box" style="width: 100%" data-aos="zoom-in" data-aos-delay="<?= $y ?>">

        <h3 style="text-align: center;"><?= (!empty($titre)) ? $titre : "Aucun titre" ; ?></h3>
        <h4><span><?= (!empty($date_format)) ? $date_format : "Aucune date" ; ?></span></h4>
        <img src="<?= (!empty($lien)) ? $lien : "Aucune image" ; ?>" style="max-height: 100%; max-width: 100%; border-radius: 20px" alt="gallery" class="img-fluid img-thumbnail">
        <p style="margin-top: 20px; text-align: center;"><?= (!empty($resume)) ? $resume : "Mon resume" ; ?></p>
        <a href="index.php?action=Illustration_gallery&id=<?= $id ?>" class="get-started-btn" style="max-width: 100%; text-align: center; padding: 5px 20px; margin: 0px">Get Started</a>
      </div>
    </div>
<?php } ?>
</div>

</div>