<div class="container" data-aos="fade-up">

  <div class="row mbr-justify-content-center">

     
        <?php foreach ($data_metier as $key => $value) { ?>

          <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
              <div class="ico-wrap">
                  <span style="color: #1889E8" class="mbr-iconfont fa-plus-circle fa"></span>
              </div>
              <div class="text-wrap vcenter">
                  <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><span><a href="index.php?action=Aboutus&id=<?= $value->getId() ?>" style="text-decoration:none;"><?= $value->getRubrique()?></a></span></h2>
                    
              </div>
          
            
        
            </div>
          </div>

        <?php } ?>
      

  

  

           
            

            
        </div>
  </div>
</div>