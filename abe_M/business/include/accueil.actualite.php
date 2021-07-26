  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h3>News</h3>
      <p>Dernières actualités</p>
    </div>
    <div class="row"  style="padding:0;" >
        <div class="col-md-12"  style="padding:0">
            <div id="news-slider2" class="owl-carousel" style="padding:0">
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
                <?php 
                    if(!empty($tab[0])) { //verifie si le premier item n'est pas vide
                        $data_actualite=[];
                        $param=[];
                        $param[0]['col'] = 'date_creation';
                        $param[0]['val'] = $tab[0][0];
                        $param[1]['col'] = 'id';
                        $param[1]['val'] = $tab[0][1];
                        $data_actualite = $this->getAllByParam("article",$param);

                        $rubrique = $this->getColsByCol('theme_blog', 'titre', 'id', $data_actualite[0]->getId_theme());
                        
                        #illustation
                        $param = [];
                        $param[0]['col'] = 'id_article';
                        $param[0]['val'] = $data_actualite[0]->getId();
                        $data_illustration = $this->getAllByParam('illustration_article',$param);

                        #parse date
                        $date = date_parse($data_actualite[0]->getDate_creation());
                        $day = $date['day'];
                        $month = $date['month'];
                        $month = strftime("%B",strtotime($data_actualite[0]->getDate_creation()));
                        $mois = utf8_encode($month);
                ?>
                     <?php require("include/template_article.php") ?>
                <?php } ?>

                <?php 
                    if(!empty($tab[1])) { //verifie si le second item n'est pas vide
                        $data_actualite=[];
                        $param=[];
                        $param[0]['col'] = 'date_creation';
                        $param[0]['val'] = $tab[1][0];
                        $param[1]['col'] = 'id';
                        $param[1]['val'] = $tab[1][1];
                        $data_actualite = $this->getAllByParam("article",$param);

                        $rubrique = $this->getColsByCol('theme_blog', 'titre', 'id', $data_actualite[0]->getId_theme());

                        #illustation
                        $param = [];
                        $param[0]['col'] = 'id_article';
                        $param[0]['val'] = $data_actualite[0]->getId();
                        $data_illustration = $this->getAllByParam('illustration_article',$param);

                        #parse date
                        $date = date_parse($data_actualite[0]->getDate_creation());
                        $day = $date['day'];
                        $month = $date['month'];
                        $month = strftime("%B",strtotime($data_actualite[0]->getDate_creation()));
                        $mois = utf8_encode($month);
                ?>

                   <?php require("include/template_article.php") ?>
                <?php } ?>

                <?php 
                    if(!empty($tab[2])) { //verifie si le second item n'est pas vide
                        $data_actualite=[];
                        $param=[];
                        $param[0]['col'] = 'date_creation';
                        $param[0]['val'] = $tab[2][0];
                        $param[1]['col'] = 'id';
                        $param[1]['val'] = $tab[2][1];
                        $data_actualite = $this->getAllByParam("article",$param);

                        $rubrique = $this->getColsByCol('theme_blog', 'titre', 'id', $data_actualite[0]->getId_theme());

                        #illustation
                        $param = [];
                        $param[0]['col'] = 'id_article';
                        $param[0]['val'] = $data_actualite[0]->getId();
                        $data_illustration = $this->getAllByParam('illustration_article',$param);

                        #parse date
                        $date = date_parse($data_actualite[0]->getDate_creation());
                        $day = $date['day'];
                        $month = $date['month'];
                        $month = strftime("%B",strtotime($data_actualite[0]->getDate_creation()));
                        $mois = utf8_encode($month);
                ?>

                     <?php require("include/template_article.php") ?>
                <?php } ?>

                <?php 
                    if(!empty($tab[3])) { //verifie si le second item n'est pas vide
                        $data_actualite=[];
                        $param=[];
                        $param[0]['col'] = 'date_creation';
                        $param[0]['val'] = $tab[3][0];
                        $param[1]['col'] = 'id';
                        $param[1]['val'] = $tab[3][1];
                        $data_actualite = $this->getAllByParam("article",$param);

                        $rubrique = $this->getColsByCol('theme_blog', 'titre', 'id', $data_actualite[0]->getId_theme());

                        #illustation
                        $param = [];
                        $param[0]['col'] = 'id_article';
                        $param[0]['val'] = $data_actualite[0]->getId();
                        $data_illustration = $this->getAllByParam('illustration_article',$param);

                        #parse date
                        $date = date_parse($data_actualite[0]->getDate_creation());
                        $day = $date['day'];
                        $month = $date['month'];
                        $month = strftime("%B",strtotime($data_actualite[0]->getDate_creation()));
                        $mois = utf8_encode($month);
                ?>

                     <?php require("include/template_article.php") ?>
                <?php } ?>
            </div>
        </div>
       
    </div>
 
  </div>
 