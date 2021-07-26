<p>
    
<?php 

// la table Entreprise doit avoir un et un seul élément actif
$param=[];
$param[0]['col']='online';
$param[0]['val']='1';

?>
<?php if(empty($this->getAllByParam($action,$param))){ ?>
<button type="button" data-toggle="modal" data-target="#description" class="btn btn-outline-primary">
<i class="fa fa-plus">         
</i>
</button>
<?php } ?>

</p>

<div class="card"> 

    <div class="card-body">
    
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr style="">
                        <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                        <th style="width:25%;text-align:center;font-weight:1000">Company name</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Date</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Statut</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Action </th>
                    </tr>
                </thead>
                <tbody>

                    <?php $root_button = $root.'button.php' ?>
                    <?php foreach ($data as $key => $value) {  ?> 
                    <?php 
                     $date = date_parse($value->getDate_creation());
                    $day = $date['day'];
                    $annee = $date['year'];
                    setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
                    $month = strftime("%B",strtotime($value->getDate_creation()));
                    $mois = utf8_encode($month);
                    $date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; ?>
                    
					<?php if($value->getOnline() != -1){ ?>
                        <tr>
                            <td> <?= $key+1 ?></td>
							<td><?= str_replace("\'", "'", $value->getNom() )?></td>
                            <td><?= $date_format ?></td>
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