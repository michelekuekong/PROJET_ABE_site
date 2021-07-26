     
<div class="container" data-aos="fade-up">
  <div class="section-title">
    <h3>Team</h3>
    <p>Key Management Team</p>
  </div>
   <div class="row">
      <?php foreach ($data_team as $key => $value) {
        //calcul de @image
        $image = trim($value->getImg());
        //calcul de @facebook
        $facebook = trim($value->getCompte_facebook());
        //calcul de @twitter
        $twitter = trim($value->getCompte_twitter());
        //calcul de @linkedin
        $linkedin = trim($value->getCompte_linkedin());
        //calcul de @instagram
        $instagram = trim($value->getCompte_instagram());
        //calcul de @nom 
        $nom = trim($value->getNom());
        //calcul de @post
        $fonction = trim($value->getFonction());
      ?>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <img src="<?= (!empty($image)) ? $image : "mon image" ; ?>" class="img-fluid" alt="image">
          <div class="member-info">
            <div class="member-info-content">
              <h4><?= (!empty($nom)) ? $nom : "mon nom" ; ?></h4>
              <span><?= (!empty($fonction)) ? $fonction : "Ma fonction" ; ?></span>
            </div>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php }  ?>
    </div>
</div>


  
