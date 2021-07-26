<form class="form-horizontal" action="index.php?action=<?= $action ?>&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Titre :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="titre" placeholder="Entrez le titre" style="width:300px;border-radius:8px" name="titre" required>
					</div>
				</div>
				<?php
					$param=[];
					$param[0]['col']='online';
					$param[0]['val']=1;
					$data_type=$this->getAllByParam('Type_prestation', $param);
				?>
				<div class="form-group col-6"   style="width: 200px;"id="type">
					<label class="control-label col-sm-2" for="code">Type:</label>
					<select id="type_prestation" class="form-control custom-select" name="id_type" style="width:300px;border-radius:8px" required>
						<option value="">Sélectionnez un type</option>
						<?php foreach($data_type as $key => $value) : ?>
							<option selected value="<?= $value->getCode() ?>"><?= $value->getTitre() ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-group col-12"   style="width: 600px; padding-left:20px;">
				<label class="control-label col-sm-12" for="code">Famille de <?= strtolower($action) ?>:</label>
				<select id="prestation" class="form-control custom-select col-sm-12" name="id_prestation" style="width:500px;border-radius:8px">
					<option value="0">- Aucune famille de service -</option>
					<?php foreach($data_type as $k => $val) : ?>
						<?php
							$param=[];
							$param[0]['col']='online';
							$param[0]['val']=1;
							$param[1]['col']='type';
							$param[1]['val']=$val->getCode();
							$data_prestation=$this->getAllByParam($action, $param);
						?>
						<optgroup label="<?= $val->getTitre() ?>"><?= $val->getTitre() ?>
							<?php foreach($data_prestation as $r => $item) : ?>
								<option value="<?= $item->getId() ?>"><?= $item->getTitre() ?></option>
							<?php endforeach; ?>
						</optgroup>
					<?php endforeach; ?>
				</select>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
			</div>
</form>
	