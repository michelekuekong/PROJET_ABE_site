<!-- marque -->
<div class="col-12 editor_nom">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom </h5>
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
						Editer un nom</strong>
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
						<div class="el-card-avatar el-overlay-1"> <img src="../dsc/<?= $img ?>" style="width: 250px; height: 200px" alt="picture">
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../dsc/<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a id="mod1" class="btn default btn-outline el-link"><i class="fa fa-window-restore"></i></a></li>
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
						<a id="addImg" class="dropdown-item" href="#">Ajouter un logo</a>
					<?php //} ?>
				<!-- 	<div class="dropdown-divider"></div> -->
					<?php //if(empty($plaquette)){ ?>
						<!-- <a id="addPlaquette" class="dropdown-item" href="#">Ajouter une Plaquette</a> -->
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
					<div class="col-md-8">
						<div id="importImg" class="custom-file">
							<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
							<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg </label>
							
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
					<div class="col-md-2" style="margin-left: 10px">
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
