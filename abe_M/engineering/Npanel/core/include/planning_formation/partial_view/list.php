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
                                            <tr>
                                                <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Formation</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Lieu</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Date debut</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Date fin</th>
												<th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                                                <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $root_button = $root.'button.php' ?>
                                            <?php foreach ($data as $key => $value){ ?> 
											<?php if($value->getOnline() != -1){ ?>
                                                <?php $formation = $this->getColsByCol('produit_prestation', 'titre', 'id', $value->getId_formation()); ?>
                                                <tr>
                                                    <td> <?= $key+1 ?></td>
													<td><?= str_replace("\'", "'",  $formation )?></td>
                                                    <td><?= str_replace("\'", "'",  $value->getLieu() )?></td>
                                                    <td><?php 
                                                            $date = date_parse($value->getDebut());
                                                            $day = $date['day'];
                                                            $annee = $date['year'];
                                                            setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
                                                            $month = strftime("%B",strtotime($value->getDebut()));
                                                            $mois = utf8_encode($month);
                                                            $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
                                                            echo $date_format;
                                                        ?>
                                                    </td>
                                                    <td><?php 
                                                            $date = date_parse($value->getFin());
                                                            $day = $date['day'];
                                                            $annee = $date['year'];
                                                            setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
                                                            $month = strftime("%B",strtotime($value->getFin()));
                                                            $mois = utf8_encode($month);
                                                            $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
                                                            echo $date_format;
                                                        ?>
                                                    </td>
                                                    <td  style="text-align:center;">
                                                        <?=  getStatut($value->getOnline());?>
                                                    </td>
                                                   
                                                    <td style="text-align:center;"><?php require($root_button); ?></td> 
                                            </tr>
                                               
                                            <?php }//fin if ?>
											<?php }//fin foreach ?>
                                            
                                           
                                        </tbody> 
                                      
                                    </table>
                                </div>

                            </div>
                        </div>