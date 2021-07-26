<form class="form-horizontal" action="index.php?action=Banniere&saction=add" method="POST" >
<input type="hidden" name="code" value="<?= CarAleatoire(10) ?>">

<div class="form-row" style="padding-left:10px">
     <div class="form-group col-md-6">
     	<label class="control-label col-sm-10" for="code">Position bannière:</label>
		<?php $position = $this->AllData('position_banniere'); ?>
		<select id="id_position" class="form-control" name="id_position" style="width:300px;border-radius:8px">
		 	<?php foreach ($position as $key => $value) { ?>
		    <option value="<?= $value->getId(); ?>"><?= $value->getNom(); ?></option>
		    <?php } ?>
        </select>
     </div>
</div>
			 
    <hr>
 <div style="float: right; padding-right:15px; padding-bottom:15px">
	<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
	<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</div>
</form>
