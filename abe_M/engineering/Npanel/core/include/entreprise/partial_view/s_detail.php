<!-- agence -->
<div class="col-12 editor_nom">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom de l'entreprise</h5>
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
						Ajouter une agence
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
						Editer une agence de <strong><?= "L".$action ?></strong>
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
<!-- ville -->
<div class="col-12 editor_ville">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Ville ou se situe l’agence</h5>
			<hr>
			
			<?php if(!empty($ville)){ ?>

			<p><?= $ville  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une ville
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_ville" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez la ville
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="ville" class="form-control" value="<?= (!empty($ville )) ? trim($ville) : '' ?>">
					
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
	<!-- pays -->
<div class="col-12 editor_pays">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">pays</h5>
			<hr>
			
			<?php if(!empty($pays)){ ?>

			<p><?= $pays  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un pays
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_pays" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le pays
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="pays" class="form-control" value="<?= (!empty($pays )) ? trim($pays) : '' ?>">
					
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
	<!-- adresse -->
<div class="col-12 editor_adresse">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Adresse</h5>
			<hr>
			
			<?php if(!empty($adresse)){ ?>

			<p><?= strip_tags($adresse)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_adresse" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez l'adresse
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($adresse )){ echo 'Saisir votre adresse ici'; } ?>" name="adresse" class="form-control"><?php if(!empty($adresse )){ ?><?= trim($adresse) ?><?php } ?></textarea> 
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
<!-- slogan -->
<div class="col-12 editor_slogan">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Slogan</h5>
			<hr>
			
			<?php if(!empty($slogan)){ ?>

			<p><?= $slogan  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un slogan
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_slogan" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le slogan
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="slogan" class="form-control" value="<?= (!empty($slogan )) ? trim($slogan) : '' ?>">
					
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

<!-- tel -->
<div class="col-12 editor_tel">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Numero de Téléphone</h5>
			<hr>
			
			<?php if(!empty($tel)){ ?>

			<p><?= $tel  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un numero de téléphone
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_tel" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le N° de Téléphone
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="tel" class="form-control" value="<?= (!empty($tel )) ? trim($tel) : '' ?>">
					
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

<!-- fax -->
<div class="col-12 editor_fax">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Numero de Fax</h5>
			<hr>
			
			<?php if(!empty($fax)){ ?>

			<p><?= $fax  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un numero de fax
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_fax" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le N° de Fax
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="fax" class="form-control" value="<?= (!empty($fax )) ? trim($fax) : '' ?>">
					
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
			<h5 class="card-title">Adresse E-mail</h5>
			<hr>
			
			<?php if(!empty($email)){ ?>

			<p><?= $email  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter une adresse E-mail
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
						Renseignez l'adresse E-mail
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="email" name="email" class="form-control" value="<?= (!empty($email )) ? trim($email) : '' ?>">
					
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
						Renseignez une description
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


<form id="form_editor_site" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez un site
					</h4>
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

<!-- Piece jointe-->
<div class="card">
	<div class="card-body">
		<!-- image -->
		<?php if(!empty($img)){ ?>
	    <hr>
        <div class="el-card-content" style="padding-bottom: 20px">
            <h4 class="m-b-0">Logo</h4>
        </div>
		<div class="row el-element-overlay">
			<div class="col-lg-3 col-md-6">
				<div class=" card">
					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> <img src="../<?= $img ?>" style="width: 250px; height: 200px" alt="picture">
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" title="visualiser" href="../<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a id="mod1" title="Modifier" class="btn default btn-outline el-link"><i class="fa fa-window-restore"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<?php } ?>

		<!-- Plaquete pdf-->
		<?php if(!empty($plaquette)){ ?>
	    <hr>
        <div class="el-card-content" style="padding-bottom: 20px">
            <h4 class="m-b-0">Plaquette</h4>
        </div>
		<div class="row el-element-overlay">
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="el-card-item">
						
						<div class="el-card-avatar el-overlay-1"><embed src="../<?= $plaquette ?>" type="application/pdf" width="300" height="200" />

							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline el-link" href="../<?= $plaquette ?>#toolbar=0" target="_blank" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a id="modplaquette" title="Modifier" class="btn default btn-outline el-link"><i class="fa fa-window-restore"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>    
		<?php } ?>
		<?php if(empty($img) or empty($plaquette) ){ ?>
		<div class="col-md-3 col-sm-12" id="AddPj">
			<div class="btn-group">
					<button type="button" class="btn btn-primary">Nouvelle Pièce jointe</button>
					<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
					<?php if(empty($img)){ ?>
						<a id="addImg" class="dropdown-item" href="#">Ajouter un logo 150 x 133 px  png jpg</a>
					<?php } ?>
					<div class="dropdown-divider"></div>
					<?php if(empty($plaquette)){ ?>
						<a id="addPlaquette" class="dropdown-item" href="#">Ajouter une Plaquette</a>
					<?php } ?> 
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
								<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de dimension 150 x 133 px </label>
								
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
					
						<div class="col-lg-4" style="margin-left: 30px; margin-top: 30px">
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
