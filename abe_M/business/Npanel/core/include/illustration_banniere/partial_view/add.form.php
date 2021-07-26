<form class="form-horizontal" action="index.php?action=Illustration_gallery&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
				<?php $gallery = $this->AllData('Gallery'); ?>
		             <label class="control-label col-sm-6" for="Type">Nom de l'album:</label>
					 <select id="Type" class="form-control" name="id_gallery" style="width:300px;border-radius:8px">
					 	<?php foreach ($gallery as $key => $value) { ?>
					    <option value="<?= $value->getId(); ?>"><?= $value->getTitre(); ?></option>
					    <?php } ?>
		            </select>
		     </div>
	         <div class="form-group col-md-6">
		             <label class="control-label col-sm-6" for="code">Date publication:</label>
		             <div class="col-sm-10">
			         <input type="date" class="form-control" id="date" placeholder="Entrez la date" style="width:300px;border-radius:8px" name="date" required>
		             </div>
	         </div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	