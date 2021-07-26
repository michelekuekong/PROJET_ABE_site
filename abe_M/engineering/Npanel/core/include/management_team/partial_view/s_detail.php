<!-- agence -->
<div class="col-12 editor_nom">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom & Prénom </h5>
			<hr>
			
			<?php if(!empty($nom)){ ?>

			<p><?= $nom  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un nom
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_nom" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer un nom
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
<!-- fonction -->
<div class="col-12 editor_fonction">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Fonction</h5>
			<hr>
			
			<?php if(!empty($fonction)){ ?>

			<p><?= $fonction  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une fonction
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_fonction" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez la fonction
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="fonction" class="form-control" value="<?= (!empty($fonction )) ? trim($fonction) : '' ?>">
					
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
<!-- facebook -->
<div class="col-12 editor_facebook">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Facebook</h5>
			<hr>
			
			<?php if(!empty($facebook)){ ?>

			<p><?= $facebook ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse facebook
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_facebook" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez l'adresse facebook
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="facebook" class="form-control" value="<?= (!empty($facebook)) ? trim($facebook) : '' ?>">
					
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
<!-- linkedin -->
<div class="col-12 editor_linkedin">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Linkedin</h5>
			<hr>
			
			<?php if(!empty($linkedin)){ ?>

			<p><?= $linkedin ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse linkedin
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_linkedin" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez l'adresse linkedin
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="linkedin" class="form-control" value="<?= (!empty($linkedin)) ? trim($linkedin) : '' ?>">
					
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
<!-- twitter -->
<div class="col-12 editor_twitter">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">twitter</h5>
			<hr>
			
			<?php if(!empty($twitter)){ ?>

			<p><?= $twitter ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse twitter
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_twitter" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez l'adresse twitter
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="twitter" class="form-control" value="<?= (!empty($twitter)) ? trim($twitter) : '' ?>">
					
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
<!-- email -->
<div class="col-12 editor_email">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Email</h5>
			<hr>
			
			<?php if(!empty($email)){ ?>

			<p><?= $email ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse email
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_email" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez l'adresse email
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="email" class="form-control" value="<?= (!empty($email )) ? trim($email) : '' ?>">
					
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
<!-- instagram -->
<div class="col-12 editor_date_creation">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Instagram</h5>
			<hr>
			
			<?php if(!empty($instagram)){ ?>

			<p><?= $instagram ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un compte instagram
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_date_creation" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le compte
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="instagram" class="form-control" value="<?= (!empty($instagram )) ? trim($instagram) : '' ?>">
					
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
<!-- description -->
<div class="col-12 editor_description">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Desription</h5>
			<hr>
			
			<?php if(!empty($description)){ ?>

			<p><?= $description  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une description
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_description" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez la description
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
	<!-- departement -->
<div class="col-12 editor_departement">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> departement </h5>
			<hr>
			
			<?php if(!empty($departement)){ ?>

			<p><?= $departement ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un departement
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_departement" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editez un departement
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="departement" class="form-control" value="<?= (!empty($departement )) ? trim($departement) : '' ?>">
					
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

<!-- Piece jointe-->
<div class="card">
	<div class="card-body">
		<!-- image -->
		<?php if(!empty($img)){ ?>
	    <hr>
        <div class="el-card-content" style="padding-bottom: 20px">
            <h4 class="m-b-0">Image</h4>
        </div>
		<div class="row el-element-overlay">

			<div class="col-lg-3 col-md-6">
				<div class=" card">
					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> <img src="../<?= $img ?>" style="width: 250px; height: 200px" alt="picture">
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li id="mod1" class="el-item"><a class="btn default btn-outline el-link"><i class="fa fa-window-restore"></i></a></li>
								</ul>
							</div>
						</div>
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
					<?php //if(empty($img)){ ?>
						<a id="addImg" class="dropdown-item" href="#">Ajouter une image</a>
					<?php //} ?>
					<!-- <div class="dropdown-divider"></div> -->
					<?php //if(empty($plaquette)){ ?>
					<!-- 	<a id="addPlaquette" class="dropdown-item" href="#">Ajouter une Plaquette</a> -->
					<?php //} ?> 
					<!-- <div class="dropdown-divider"></div> -->
					<?php //if(empty($video)){ ?>
						<!-- <a id="addVideo" class="dropdown-item" href="#">Ajouter une Video</a> -->
					<?php //} ?>
					</div>
				</div><!-- /btn-group -->
			
		</div>
		<?php } ?> 
		<?php if(isset($response) && !empty($response)) { ?>
			<div class="col-md-12 text-danger">
				<?php if(!empty($response[0])){ echo "<p>".$response[0]."</p>"; } ?>
				<?php if(!empty($response[1])){ echo "<p>".$response[1]."</p>"; } ?>
			</div>
		<?php } ?>
		<div class="col-md-12 col-sm-12" id="DivFormAddPj">
			<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
				<div class="form-group row">
						<div class="col-lg-8">
							<div id="importImg" class="custom-file">
								<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
								<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg 600px X 600px </label>
								
							</div>
							<div id="importPlaqt" class="custom-file">
								<input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette">
								<label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf ... </label>
								
							</div>
							<div id="importVideo" >
								<div class="form-group row">
										<div class="col-sm-12">
											<input type="file" class="custom-file-input" id="validatedCustomFile" name="video">
											<label class="custom-file-label" for="validatedCustomFile">Importer une video </label>
										</div>
									</div>
								
							</div>
						</div>
					
						<div class="col-lg-4">
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

	</div>
</div>
