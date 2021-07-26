<nav class="nav-menu d-none d-lg-block" >
  <ul>
    <li class="active"><a href="index.php">Accueil</a></li>

    <?php 
  
    ?>
    
    <li class="drop-down"><a href="#">A propos de nous</a>
          <ul>
            <!-- Presetation  -->
            <?php foreach ($data_aboutus as $key_s => $value_s):
              //calcul de @id
              $id = trim($value_s->getId());
              //calcul de @rubrique
              $rubrique = trim( $value_s->getRubrique());
              //calcul de @id_p
              $id_p = trim( $value_s->getId_position());
            ?>
            <li>
                <a href="index.php?action=Aboutus&id=<?= $id; ?>">
                  <?= $rubrique ?>
                </a>
            </li>
            
            <?php endforeach; ?>
             <!--/ Presetation  -->
            <!-- Team management 
            <li> <a href="index.php?action=Management_team">Notre équipe </a></li>-->
             <!-- /Team management -->
          </ul>
    </li>


 
      
        <li class="drop-down"><a href="#">Notre Métier</a>
          <ul>
            <?php foreach ($data_metier as $key => $value): ?>

            <li><a href="index.php?action=Aboutus&id=<?= $value->getId() ?>" style="text-decoration:none;"><?= ucfirst(mb_strtolower($value->getRubrique(),'UTF-8') ) ?></a></li>

            <?php endforeach; ?>
          </ul>
        </li>

         <li class="drop-down"><a href="#">Nos Services</a>
          <ul>
            <?php foreach ($data_service as $key => $value): ?>

            <li><a href="index.php?action=Service&id=<?= $value->getId() ?>"><?= trim( $value->getTitre()) ?></a></li>

            <?php endforeach; ?>
        
          </ul>
    </li>
       
  
    </li>
   <li><a href="index.php?action=Gallery">Réalisations</a></li>
    <li><a href="index.php?action=News">Actualité</a></li>
  
    <li><a  href="index.php?action=Contact">Contact</a></li>

  </ul>
</nav>
        
     