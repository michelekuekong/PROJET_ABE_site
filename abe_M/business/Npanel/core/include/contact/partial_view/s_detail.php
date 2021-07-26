<!-- Type -->
<div class="col-12 editor_type">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> <?= $type ?> </h5>
			<hr>
			
			<?php if(!empty($type )){ ?>

			<p><?= $valeur  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter son type
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>
	<form id="form_editor_type" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le type de <strong><?= str_replace("_", " ", $action) ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 100%;height:65px">
			            <label class="control-label col-sm-2" for="code"><?= $type ?></label>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 500px;">
							<input type="text" name="valeur" class="form-control" value="<?= (!empty($valeur )) ? trim($valeur) : '' ?>">
						
						</div>
						</div>
						<div class="col-12" style="text-align:center; margin-top:5px;">
							<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
									Valider
							</button>
							<button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>

						</div>

					</div>
				</div>
			</div>
		</div>
	</form>
<!-- agence -->	
<div class="col-12 editor_agence">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Agence</h5>
			<hr>
			
			<?php if(!empty($agence )){ ?>

			<p><?= stripslashes($agence)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter son agence
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>
<form id="form_editor_agence" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Rensiegnez l'agence
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:65px">
						<?php $agence = $this->AllData('agence'); ?>
						<select id="Agance" class="form-control" name="id_agence" style="width:300px;border-radius:8px">
						 	<?php foreach ($agence as $key => $value) { ?>
						    <option value="<?= $value->getId(); ?>" <?php if($id_agence==$value->getId()) echo "selected"; ?>><?= $value->getNom(); ?></option>
						    <?php } ?>
			            </select>
					</div>
					<div class="col-12" style="text-align:center; margin-top:5px;">
						<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
								Valider
						</button>
						<button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
							Annuler
						</button>

					</div>

				</div>
			</div>
		</div>
	</div>
</form>
	
	