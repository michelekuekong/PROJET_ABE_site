
<div class="container" data-aos="fade-up" >

<div class="section-title">
  <h3>Notre offre</h3>
  <p>Services</p>
</div>

<div class="row">
  <?php $y=0; ?>
 <?php foreach ($data_service as $key => $value){ 
  $y = $y+100;
  //cal de @id
  $id = trim( $value->getId());
  //cal de @resume
  $resume = trim( $value->getResume());
  //calcul de @titre
  $titre = trim( $value->getTitre());
  ?>
  <?php
   $param=[];
   $param[0]['col']='id_prestation';
   $param[0]['val']=$id;
   $param[1]['col']='type';
   $param[1]['val']='image';
   $param[2]['col']='online';
   $param[2]['val']=1;
   $tab_image=$this->getAllByParam('illustration_prestation',$param);

   if(!empty($tab_image)){
   $image=$tab_image[0]->getLien();
   }else{
    $image=null;
   }
  ?>

  <div class="col-md-6">
   <div class="card flex-md-row mb-4 shadow-sm h-md-250" style="background-color:#097e91; color:#fff">
      <div class="card-body d-flex flex-column align-items-start">
         <strong class="d-inline-block mb-2 text-primary"><a href="index.php?action=Service&id=<?= $id; ?>" style='color:#c4f7fb; font-weight:800'><?= (!empty($titre)) ? $titre : "Mon titre" ; ?></a></strong>
         
  
         <p class="card-text mb-auto" style="text-align: justify-all;"><?= (!empty($resume)) ? $resume : "Mon resume" ; ?></p>
         <a class="btn btn-outline-info btn-sm" role="button" href="index.php?action=Service&id=<?= $id; ?>">En savoir plus</a>
      </div>
      <img class="card-img-right flex-auto d-none d-lg-block" alt="<?= (!empty($titre)) ? $titre : "Mon titre" ; ?>" src="<?= (!empty($image)) ? $image : "" ; ?>" style="width: 200px; height: 250px;">
   </div>
</div>
  <?php } ?>

  </div>

</div>