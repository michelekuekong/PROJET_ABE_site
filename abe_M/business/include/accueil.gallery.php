<div class="container" data-aos="fade-up">

<div class="section-title">
  <h3>Galerie</h3>
  <p>Nos réalisations</p>
</div>
<div class="row"  style="padding:0;" >
    <div class="col-md-12"  style="padding:0">
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
    </div>
   
</div>

</div>
