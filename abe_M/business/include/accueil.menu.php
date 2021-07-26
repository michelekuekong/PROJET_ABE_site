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
    <li><a href="index.php?#about">Notre expertise</a></li>
    <li><a href="index.php?#services">Nos prestations</a></li>
       
    <li><a href="index.php?#pricing">Réalisations</a></li>
    <li><a  href="index.php?action=Contact">Contact</a></li>

  </ul>
</nav>
        
     