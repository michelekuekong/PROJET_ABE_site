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
                        <th style="width:25%;text-align:center;font-weight:1000">Position | Image</th>
                        <th style="width:25%;text-align:center;font-weight:1000">Date</th>				
                        <th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $root_button = $root.'button.php' ?>
                    <?php foreach ($data as $key => $value){

                    $position= $this->getColsByCol('position_banniere', 'nom', 'id', $value->getId_position() ); ?> 
					<?php if($value->getOnline() != -1){ ?>
                        <tr>
                            <td> <?= $key+1 ?></td>
                            <?php 
                            $date = date_parse($value->getDate_pub());
                            $day = $date['day'];
                            $annee = $date['year'];
                            setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
                            $month = strftime("%B",strtotime($value->getDate_pub()));
                            $mois = utf8_encode($month);
                            $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
                            $position= $this->getColsByCol('position_banniere', 'nom', 'id', $value->getId_position() );?> 
                            <?php $photo=  $this->getColsByCol('illustration_banniere', 'lien', 'id_banniere', $value->getId()); ?>
                            <td>
                                <p style="text-align:center; width:100%"><?=  $position; ?></p><br>
                            <?php if(!empty($photo)){ ?>
                                 <img class="img img-fluid img-thumbnail"  src="<?= '../'.$photo ?>">
                            <?php } ?>
                             
                           
                                                            
                            </td>
                            <td><?=  $date_format; ?></td>
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