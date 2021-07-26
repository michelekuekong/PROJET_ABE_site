<!-- Type -->
<div class="col-12 editor_type">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Type</h5>
			<hr>
			
			<?php if(!empty($type )){ ?>

			<p><?= $type  ?></p>
	
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
						Choisir le type
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 200px;">
						<select id="Type" class="form-control custom-select" name="type" style="width:300px;border-radius:8px">
							<option value="Chiffre" <?= ($type=='Chiffre')?'selected':'' ?>>Chiffre</option>
							<option value="Client" <?= ($type=='Client')?'selected':'' ?>>Client</option>
							<option value="Partenaire" <?= ($type=='Partenaire')?'selected':'' ?>>Partenaire</option>
		            	</select>
					</div>
					<div class="col-12" style="text-align:center; margin-top:50px;">
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
<!-- Type -->

<!-- Nom -->
<div class="col-12 editor">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom du <strong><?= $type ?></strong></h5>
			<hr>
			
			<?php if(!empty($nom )){ ?>

			<p><?= str_replace("\'", "'", $nom)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter son nom
					</button>
				</div>
			<?php } ?>
	
		</div>
	</div>
</div>

<form id="form_editor" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer le nom du <strong><?= $type ?></strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="nom" class="form-control" value="<?= (!empty($nom )) ? trim($nom) : '' ?>">
					
					</div>
					<div class="col-12" style="text-align:center; margin-top:50px;">
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
<!-- nom -->

<?php if($type=='Chiffre'){ ?>
	<!-- Chiffre -->
	<div class="col-12 editor_chiffre">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($chiffre )){ ?>

				<p><?= $chiffre  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button>
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
							Ajouter le Chiffre
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>


	<form id="form_editor_chiffre" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le <strong><?= $type ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 150px;">
							<input type="number" name="chiffre" class="form-control" value="<?= (!empty($chiffre )) ? trim($chiffre) : '' ?>">
						
						</div>
						<div class="col-12" style="text-align:center; margin-top:50px;">
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
	<!-- Chiffre -->
<?php } ?>

<?php if($type!='Chiffre'){ ?>
	<!-- Description -->
	<div class="col-12 editor_resume">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Description du <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($description )){ ?>

				<p><?= str_replace("\'", "'", $description)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button> 
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-info" id="ts-info">
							Ajouter la description 
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>

	<form id="form_editor_resume" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&ssaction=update&id=<?= $id?>" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer la description du <?= $type ?> <strong><?= $nom ?> </strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 100%;height:200px">
							<textarea  id="myeditor"  placeholder="<?php if(empty($description )){ echo 'Saisir votre texte ici'; } ?>" name="description" class="form-control"><?php if(!empty($description )){ ?><?= trim($description) ?><?php } ?></textarea> 
						</div>
						<div class="col-12" style="text-align:center; margin-top:50px;">
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

	<!-- Site web -->
	<div class="col-12 editor_site">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Site web du <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($site_web )){ ?>

				<p><?= str_replace("\'", "'", $site_web)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button>
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
							Ajouter son site web
						</button>
					</div>
				<?php } ?>

					
			</div>
		</div>
	</div>

	<form id="form_editor_site" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le site web du <strong><?= $type ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 500px;">
							<input type="text" name="site_web" class="form-control" value="<?= (!empty($site_web )) ? trim($site_web) : '' ?>">
						
						</div>
						<div class="col-12" style="text-align:center; margin-top:50px;">
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
	<!-- site_web -->


	<!-- Piece jointe-->
	<div class="card">
		<div class="card-body" id="bloc_file">
		<h5 class="card-title"> Pièces jointes  du <?= $type ?> <strong><?= $nom ?> </strong></h5>
		<hr>
			<!-- image -->
			<div class="row el-element-overlay">
			<?php if(!empty($img)){ ?>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="el-card-item">
							<div class="el-card-avatar el-overlay-1"> <img src="../<?= $img ?>" alt="user" />
								<div class="el-overlay">
									<ul class="list-style-none el-info">
										<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../panessitV14/<?= $img ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
										<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_img" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="el-card-content">
								<h4 class="m-b-0">Image</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modal_img" tabindex="-1" role="dialog" aria-labelledby="image" aria-hidden="true">
					<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
								<h5 class="modal-title" id="exampleModalLongTitle">
									Modification de l'image
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
								<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id ?>&ssaction=update" enctype="multipart/form-data">
									<div class="custom-file">
										<div class="form-group row">
											<div class="col-sm-12">
												<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
												<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 250x165 ... </label>
											</div>
										</div>
										
									</div>
									<hr>
									<div class="col-md-8 text-right">
										<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
												Valider
										</button>
										<button type="button" data-dismiss="modal" aria-label="Close" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
											Annuler
										</button>
									</div>
								</form>
							</div>
						
						</div>
					</div>
				</div>
		
			<?php } ?>

	

			<?php if(empty($img)){ ?>
			<div class="col-md-3 col-sm-12" id="AddPj">
				<div class="btn-group">
						<button type="button" class="btn btn-primary">Nouvelle Pièce jointe</button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu">
							<a id="addImg" class="dropdown-item" href="#">Ajouter une image</a>
						
						</div>
					</div><!-- /btn-group -->
				
			</div>
			<?php } ?> 
			
			<div class="col-md-12 col-sm-12" id="DivFormAddPj">
				<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
					<div class="form-group row">
							<div class="col-md-8">
								<div id="importImg" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="image" >
									<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 250x165 </label>
									
								</div>
							</div>
					
						<div class="col-md-4">
							<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
									Valider
							</button>
							<button type="button" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>
						</div> 
					</div>
				</form>
		
			
			</div>

			<?php if(isset($error) && !empty($error)) echo '<div class="alert-warning col-md-12 text-center" style="padding: 10px;margin-top: 10px">'.$error.'</div>'; ?>			

			</div>

		</div>
	</div>
	<?php } ?>