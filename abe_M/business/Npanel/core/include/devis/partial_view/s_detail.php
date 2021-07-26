<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3>
                <b>DEMANDE DE DEVIS </b> <span class="pull-right">#<?= $this->formater("",$id,5) ?></span>
            <?php
                     
                       if($closing==-1){
                         echo "<span class='badge badge-warning'>En attente</span>";
                       }elseif ($closing==1) {
                           echo"<span class='badge badge-success' >concluyant</span>";
                       }else{
                        echo"<span class='badge badge-danger'>Non concluyant</span>";
                       }

                    ?>
                </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <address>
                            <h3> &nbsp;<b class="text-danger"><?= $nom_prospect ?></b></h3>
                            <p class="text-muted m-l-5">
                                N° TEL  : <?= $tel_prospect;?>
                                <br> E-mail : <?= $email_prospect ?>
                                <br> Fonction: <?= $fonction_prospect ?>
                            </p>
                            <p>
                                <strong><?= $nom_company ?></strong>
                                <br>N° Tel: <?= $tel_company ?>
                                <br> Fax: <?= $fax_company ?> 
                                <br> Site web: <?= $site_web_company ?>
                            </p>
                             <p class="m-t-30"><b>Date demande devis :</b> <i class="fa fa-calendar"></i> <?= $date_creation ?></p>
                           
                           
                        </address> 
                    </div>
                     
                </div>
                <div class="col-md-12">
                         <div class="table-responsive m-t-40" style="clear: both;">
                        <table class="table table-hover">
                            
                            <tbody>
                                <tr>
                                    <td class="text-center">Démarrage: <?= $date_demarrage ?></td>
                                    <td class="text-center">Objet: <?= str_replace("\'", "'", $objet) ?></td>
                                    <td class="text-center">Site: <?= str_replace("\'", "'", $adresse_company) ?></td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="3" style="text-align:justify;">
                                    <p>Description du projet</p><br>
                                    <p>
                                        <?= $description ?>
                                    </p>
                                            
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                </div>
                <div class="col-md-12">
                  
                    <div class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Traitement</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="mailto:<?= $email_prospect ?>&subject=Votre demande de devis">
                                   <i style="color:blue" class="fas fa-envelope"></i>  Envoyer un  mail
                                </a>
                                <?php if($closing==0 or $closing==-1){ ?>
                                <a class="dropdown-item" href="index.php?action=Devis&saction=Detail&ssaction=1&id=<?=$id?>">
                                    <i style="color:green" class=" fas fa-check-circle"></i>
                                    Affaire concluyante

                                </a>
                                <?php } ?>
                                <?php if($closing==-1 or $closing==1  ){ ?>
                                <a class="dropdown-item" href="index.php?action=Devis&saction=Detail&ssaction=0&id=<?=$id?>">
                                     <i style="color:red" class=" fas fa-window-close"></i>
                                     Affaire non concluyante
                                </a>
                                <?php } ?>
                                
                               
                            </div>
                        </div><!-- /btn-group -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

