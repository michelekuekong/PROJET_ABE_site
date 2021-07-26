
<div class="card"> 

<div class="card-body">

    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr style="">
                    <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                    <th style="width:25%;text-align:center;font-weight:1000">Produit</th>
                    <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value){ ?> 
                    <?php $nom_produit = $this->getColsByCol('produit', 'nom', 'id', $value->getId_produit()); ?>
                    <tr>
                        <td> <?= $key+1 ?></td>
                        <td><?= str_replace("\'", "'",  $nom_produit )?></td>
                        
                        <td style="text-align:center;"><a href="index.php?action=<?= $action?>&saction=Restaure&id=<?= $value->getId() ?>&ssaction=<?= $type ?>" class="btn btn-primary"><i class="fas fa-undo"></i></a></td> 
                </tr>
                    
                <?php }//fin foreach ?>
                
                
            </tbody> 
            
        </table>
    </div>

</div>
</div>