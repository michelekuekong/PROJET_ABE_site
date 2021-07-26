<p>
<button type="button" data-toggle="modal" data-target="#description" class="btn btn-outline-primary">
<i class="fa fa-plus">         
</i>
</button>

</p>

<div class="card"> 

    <div class="card-body">
    
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr style="">
                        <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                        <th style="width:25%;text-align:center;font-weight:1000">
                            Date
                        </th>
                        <th style="width:25%;text-align:center;font-weight:1000">
                            Objet
                        </th>
                        <th style="width:25%;text-align:center;font-weight:1000">
                            Prospect
                        </th>
                        <th style="width:25%;text-align:center;font-weight:1000">Etat</th>
						<th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $root_button = $root.'button.php' ?>
                    <?php foreach ($data as $key => $value){ ?> 
					<?php if($value->getOnline() != -1){ ?>
 
                       
                        <tr>
                            <td> <?= $key+1 ?></td>
                             <td>
                                <?php 
                                    $date = date_parse($value->getDate_creation());
                                    $closing=$value->getClosing();
                                    $statut=$value->getStatut();
                                    $day = $date['day'];
                                    $annee = $date['year'];
                                    setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
                                    $month = strftime("%B",strtotime($value->getDate_creation()));
                                    $mois = utf8_encode($month);
                                    $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
                                    echo $date_format;
                                ?>

                            </td>
                            <td><?= str_replace("\'", "'", $value->getObjet())?>
							<td><?= str_replace("\'", "'", $value->getNom_prospect())?></td>
                             <td  style="text-align:center;">
                            <?php
                                if($statut==0){
                                echo "<span class='badge badge-danger'>New</span>";
                                }else{
                                echo"<span><i class='fas fa-check' style='color:green;' ></i></span>";
                                }
                            ?>
                            </td>
                           
                            <td  style="text-align:center;">
                                <?php
                            if($closing==-1){
                            echo "<span class='badge badge-warning'>En attente</span>";
                            }elseif ($closing==1) {
                            echo"<span class='badge badge-success' >concluyant</span>";
                            }else{
                            echo"<span class='badge badge-danger'>Non concluyant</span>";
                            }
                            ?>
                            </td>
                           
                            <td style="text-align:center;">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <a style="color:#fff" href="index.php?action=<?= $action?>&saction=Detail&id=<?= $value->getId() ?><?php if(!empty($type))echo'&type='.$type ?>">
                                        Détail
                                    </a>
                                </button>
                            </td> 
                    </tr>
                       
                    <?php }//fin if ?>
					<?php }//fin foreach ?>
                    
                   
                </tbody> 
              
            </table>
        </div>

    </div>
</div>