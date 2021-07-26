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
                                                <th style="width:5%;text-align:center;font-weight:1000">Nom de l'album</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Lien</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Type</th>
                                                <th style="width:25%;text-align:center;font-weight:1000">Date publication</th>
												<th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                                                <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $root_button = $root.'button.php' ?>
                                            <?php foreach ($data as $key => $value){ ?> 
                                            <?php
                                                $id_gallery=$value->getId_gallery();
                                                $titre_gallery=$this->getColsByCol("gallery","titre","id",$id_gallery);
                                            ?> 
											<?php if($value->getOnline() != -1){ ?>
                                                <tr>
                                                    <td> <?= $key+1 ?></td>
													<td><?= str_replace("\'", "'",  $titre_gallery )?></td>
                                                    <td><?= $value->getLien() ?></td>
                                                    <td><?= $value->getType() ?></td>
                                                    <td><?= $value->getDate_pub() ?></td>
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