
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <?php 
      
        $y=0;

         foreach ($data_ban as $key_s => $value_s){

          //recuperation de l'image
          $param=[];
          $param[0]['col']='online';  $param[0]['val']=1;
          $param[1]['col']='id_banniere';  $param[1]['val']=$value_s->getId();
          $param[2]['col']='type';  $param[2]['val']='image';
          $data_illustration_ban=$this->getAllByParam("Illustration_banniere",$param);
          if(!empty($data_illustration_ban)){
            $img_ban=$data_illustration_ban[0]->getLien();
          }else{
            $img_ban="";
          }
          
       
          $y=$y+1;
          $stature="";
          if($y==1)
          {
            $stature="active";
            echo'          
                    <div class="carousel-item '.$stature.'" style="background-image: url('.trim( $img_ban).')">
                      <div class="carousel-container" style="background-color: aliceblue #000">
                          
                            <div class="container">
                                <div style="background:rgba(22, 83, 90, 0.62)  ; opacity: 0.9; padding: 15px 15px 15px" class="col-lg-9">';
                  

                                  echo'<h3 class="animate__animated animate__fadeInDown">'.trim( $value_s->getTexte1()).'</h3>
                                  <p class="animate__animated animate__fadeInUp" >'.trim( $value_s->getTexte2()).'</p>
                                 </div>
                              <a style="cursor: pointer;" href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Nos services</a>

                            </div>
                          


                      </div>
                    </div>';
          }else{echo'

                    <div class="carousel-item '.$stature.'" style="background-image: url('.trim($img_ban).')">
                      <div class="carousel-container" style="background-color: aliceblue #000">
                          
                            <div class="container">
                                <div style="background:rgba(22, 83, 90, 0.62)  ; opacity: 0.9; padding: 15px 15px 15px" class="col-lg-10">';
                  

                                  echo'<h3 class="animate__animated animate__fadeInDown">'.trim( $value_s->getTexte1()).'</h3>
                                  <p class="animate__animated animate__fadeInUp" >'.trim( $value_s->getTexte2()).'</p>
                                 </div>
                              <a style="cursor: pointer;"  href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Nos services</a>
                            </div>
                          


                      </div>
                    </div>';}
        
} 

?>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
 </div>