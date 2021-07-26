<form class="form-horizontal" action="index.php?action=<?= $action ?>&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Lieu:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="valeur" placeholder="Entrez le titre" style="width:300px;border-radius:8px" name="lieu" required>
					</div>
				</div>
				<?php
					$param=[];
					$param[0]['col']='online';
					$param[0]['val']=1;
					$data_formation=$this->getAllByParam('produit_prestation', $param);
				?>
				<div class="form-group col-6"   style="width: 200px;">
					<label class="control-label col-sm-2" for="code">Formation:</label>
					<select id="type" class="form-control custom-select" name="id_formation" style="width:300px;border-radius:8px">
						<?php foreach($data_formation as $key => $value) : ?>
							<?php
								$param=[];
								$param[0]['col']='type';
								$param[0]['val']='Formation';
								$prestation = $this->getAllByParam('prestation', $param);
							?>
							<?php foreach($prestation as $k => $item): ?>
								<?php if($item->getId() == $value->getId_prestation()){ ?>
									<option value="<?= $value->getId() ?>"><?= $value->getTitre() ?></option>
								<?php } ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Debut:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="valeur" style="width:300px;border-radius:8px" name="debut" required>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Fin:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="valeur" style="width:300px;border-radius:8px" name="fin" required>
					</div>
				</div>
				
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	