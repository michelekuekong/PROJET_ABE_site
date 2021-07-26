<form class="form-horizontal" action="index.php?action=Contact&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
		             <label class="control-label col-sm-2" for="Type">Type:</label>
					 <select id="Type" class="form-control" name="type" style="width:300px;border-radius:8px" required>
					    <option value="Tel">Téléphone</option>
					    <option value="Email">Email</option>
		            </select>
		     </div>
	        <div class="form-group col-md-6">
		             <label class="control-label col-sm-2" for="code">Valeur:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="valeur" placeholder="Entrez le contact" style="width:300px;border-radius:8px" name="valeur" required>
		             </div>
	         </div>
			</div>
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
				<?php $agence = $this->AllData('agence'); ?>
		             <label class="control-label col-sm-2" for="Type">Agence:</label>
					 <select id="Agence" class="form-control" name="id_agence" style="width:300px;border-radius:8px" required>
					 	<?php foreach ($agence as $key => $value) { ?>
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
	