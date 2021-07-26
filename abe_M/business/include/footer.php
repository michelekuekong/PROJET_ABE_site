
  <?php if (!empty($data_entreprise)) { ?>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><?= (!empty($data_entreprise[0]->getNom())) ? $data_entreprise[0]->getNom() : "" ; ?></h3>

              <p class="pb-3"><em><i class="fa fa-quote-left" aria-hidden="true"></i> <?= (!empty($data_entreprise[0]->getSlogan())) ? $data_entreprise[0]->getSlogan() : "" ; ?> <i class="fa fa-quote-right" aria-hidden="true"></i></em></p>
              <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i> 
                <?= (!empty($data_entreprise[0]->getAdresse())) ? $data_entreprise[0]->getAdresse() : "" ; ?>
              </p>

              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php?action=Gallery">Nos projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php?action=Contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a data-toggle="modal" style="cursor: pointer;" data-target="#demande_devis">Demander un devis</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
             
              <?php foreach ($data_service as $key => $value) {?>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php?action=Service&id=<?= $value->getId() ?>"><?= trim( $value->getTitre()) ?></a></li>
              <?php } ?>
            </ul>
          </div>
         
         
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Contacts</h4>
            <ul>
           
              <li>
                <i class="bx bx-chevron-right"></i> 
                <span style="font-weight:900; margin-right:10px">Tel :</span>  
                <span style="margin-right:10px"><?= $tel_siege ?> </span>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> 
                <span style="font-weight:900; margin-right:10px">E-mail :</span>  
                <span style="margin-right:10px"> <?= $email_siege ?> </span>
              </li>
     
          </ul>
          </div>
         
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Africa Business & Engeneering</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://NobiSoft.cm/">NobiSoft</a>
      </div>
    </div>
  <?php } ?>  