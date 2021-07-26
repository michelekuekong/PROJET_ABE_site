<form class="form-horizontal" action="index.php?action=<?= $action ?>&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Titre:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="valeur" placeholder="Entrez le titre" style="width:300px;border-radius:8px" name="titre" required>
					</div>
				</div>
				<?php
					$param=[];
					$param[0]['col']='online';
					$param[0]['val']=1;
					$data_prestation=$this->getAllByParam('prestation', $param);
				?>
				<div class="form-group col-6"   style="width: 200px;">
					<label class="control-label col-sm-6" for="code">Categorie prestation:</label>
					<select id="type" class="form-control custom-select" name="id_prestation" style="width:300px;border-radius:8px">
						<?php foreach($data_prestation as $key => $value) : ?>
							<option value="<?= $value->getId() ?>"><?= $value->getTitre() ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Prix:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="valeur" style="width:300px;border-radius:8px" name="prix" required>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Durée:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="valeur" style="width:300px;border-radius:8px" placeholder="ex: 04 jours" name="timing" required>
					</div>
				</div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	