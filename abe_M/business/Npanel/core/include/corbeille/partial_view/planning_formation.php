
<div class="card"> 

<div class="card-body">

    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr style="">
                    <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Formation</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Lieu</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Debut</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Fin</th>
                    <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value){ ?>
                    <?php $formation = $this->getColsByCol('produit_prestation', 'titre', 'id', $value->getId_formation()); ?> 
                    <tr>
                        <td> <?= $key+1 ?></td>
                        <td><?= str_replace("\'", "'",  $formation )?></td>
                        <td><?= str_replace("\'", "'",  $value->getLieu() )?></td>
                        <td>
                            <?php 
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
                        <td>
                            <?php 
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
                        
                        <td style="text-align:center;"><a href="index.php?action=<?= $action?>&saction=Restaure&id=<?= $value->getId() ?>&ssaction=<?= $type ?>" class="btn btn-primary"><i class="fas fa-undo"></i></a></td> 
                </tr>
                    
                <?php }//fin foreach ?>
                
                
            </tbody> 
            
        </table>
    </div>

</div>
</div>