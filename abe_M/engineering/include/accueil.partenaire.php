
  <div class="container" data-aos="fade-up">

        <div style="text-align:center; color:#fff; padding:20px;">
          <h3 style="color:#fff; font-size:25px;  font-weight:600;">Ils nous font confiance</h3>
        </div>

        <div class="owl-carousel testimonials-carousel" >

          <?php
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']= 1;
            $param[1]['col']= 'type';
            $param[1]['val']= 'partenaire';
            $param[2]['col']= 'id_entreprise';
            $param[2]['val']= 1;
            $data_partner= $this->getAllByParam('reference',$param); 
           ?>
           <?php foreach ($data_partner as $key => $value) {
             // calcul de @logo
            $logo = trim($value->getLogo());
            // cal de @nom
            $nom = trim($value->getNom());
            
           ?>

          <div class="testimonial-wrap">
            
              <img   src="<?= (!empty($logo)) ? $logo : "Mon logo" ; ?>"  alt="<?= $nom ?>">
           
          </div>
           <?php } ?>

      </div>