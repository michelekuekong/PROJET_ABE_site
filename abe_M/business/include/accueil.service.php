
<div class="container" data-aos="fade-up" >

<div class="section-title">
  <h3>Notre offre</h3>
  <p>Prestations</p>
</div>

 <div class="row demo2">
  <?php $y=0; ?>
  <?php foreach ($data_service as $key => $value){ 
    //cal de @id
    $id = (int)$value->getId();
    //cal de @resume
    $resume =trim(ucfirst(mb_strtolower(stripslashes($value->getResume()))));
    //calcul de @titre
    $titre = trim(mb_strtoupper(stripslashes($value->getTitre())));
    // calcule des de sous services
    $param=[];
    $param[0]['col']='online';
    $param[0]['val']=1;
    $param[1]['col']='type';
    $param[1]['val']='Service';
    $param[2]['col']='id_entreprise';
    $param[2]['val']=1;
    $param[3]['col']='id_parent';
    $param[3]['val']=$id;
    $data_sservice=$this->getAllByParam('Prestation',$param);


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
<!-- item service -->
    <div class="col-md-4 col-sm-6" style="margin-bottom:25px">
      <div class="pricingTable2  <?= ($key%2==0)?'blue':'pink' ?>">
          <div class="pricingTable-header">
              <h3 class="title"><?= $titre ?></h3>
            
          </div>
          <ul class="pricing-content">
            <?php foreach ($data_sservice as $key_ss => $value_ss) { ?>
               <li><i class="fa fa-check"></i> <?=  ucfirst((mb_strtolower(stripslashes($value_ss->getTitre())))); ?></li>
                <?php  if($key_ss==4)break; ?>
            <?php } ?>
          </ul>
          <a href="index.php?action=Service&id=<?= $id; ?>" class="pricingTable-signup">En savoir plus</a>
      </div>
    </div><br>
<!-- items service -->
   
  <?php } ?>



</div>