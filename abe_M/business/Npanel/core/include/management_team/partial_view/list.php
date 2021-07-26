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
                    <th style="width:5%;text-align:center;font-weight:1000">Photo</th>
                    <th style="width:5%;text-align:center;font-weight:1000">Nom</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Fonction</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Email</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Departement</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Facebook</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Instagram</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                    <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $root_button = $root.'button.php' ?>
                <?php foreach ($data as $key => $value){ ?> 
                <?php if($value->getOnline() != -1){ ?>
                    <?php
                        $img= (empty($value->getImg())) ? 'assets/images/users/user.png' :  "../".$value->getImg();
                      
                      
                    ?>
                    <tr>
                        <td> <?= $key+1 ?></td>
                         <td> <img src="<?= $img ?>" class='img-fluid'> </td>
                        <td><?= str_replace("\'", "'",  $value->getNom() )?></td>
                        <td><?= str_replace("\'", "'",  $value->getFonction() )?></td>
                        <td><?= str_replace("\'", "'",  $value->getEmail() )?></td>
                        <td><?= str_replace("\'", "'",  $value->getDepartement() )?></td>
                        <td><?= str_replace("\'", "'",  $value->getCompte_facebook() )?></td>
                        <td><?= str_replace("\'", "'",  $value->getCompte_instagram() )?></td>
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