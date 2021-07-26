<!-- Album -->
<div class="col-12 editor_titre">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Album</h5>
			<hr>
			
			<?php if(!empty($album)){ ?>

			<p><?= $album  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajoutez un album
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_titre" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						selectionnez un Album
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
					<?php $gallery = $this->AllData('Gallery'); ?>
					 <select id="Type" class="form-control" name="id_gallery" style="width:300px;border-radius:8px">
					 	<?php foreach ($gallery as $key => $value) { ?>
					    <option value="<?= $value->getId(); ?>"><?= $value->getTitre(); ?></option>
					    <?php } ?>
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
<!-- Detail -->
<div class="col-12 editor_detail">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Detail</h5>
			<hr>
			
			<?php if(!empty($detail)){ ?>

			<p><?= $detail  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un detail
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_detail" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editez le detail
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($detail)){ echo 'Saisir votre detail ici'; } ?>" name="detail" class="form-control"><?php if(!empty($detail )){ ?><?= trim($detail) ?><?php } ?></textarea> 
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
<!-- date publication -->
<div class="col-12 editor_date_pub">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Date de publication</h5>
			<hr>
			
			<?php if(!empty($date_pub)){ ?>

			<p><?= $date_pub  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la date de publication
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_date_pub" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez la date de creation
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="date" name="date_creation" class="form-control" value="<?= (!empty($date_creation)) ? trim($date_creation) : '' ?>">
					
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
	<h5 class="card-title"> joindre une photo ou une video </h5>
	<hr>
		<!-- image -->
		<div class="row el-element-overlay">
		<?php if(!empty($img)){ ?>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> <img src="/panessitV14/<?= $img ?>" alt="user" />
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="el-card-content">
							<h4 class="m-b-0">Image</h4>
						</div>
					</div>
				</div>
			</div>
	
		<?php } ?>
	
		<!-- Video-->

		<?php if(!empty($video)){ ?>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> <img src="<?= $video ?>" alt="user" />
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?= $video ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="el-card-content">
							<h4 class="m-b-0">Video</h4>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php if(empty($img) or empty($plaquette) or empty($video)){ ?>
		<div class="col-md-3 col-sm-12" id="AddPj">
			<div class="btn-group">
					<button type="button" class="btn btn-primary">Nouvelle Pièce jointe</button>
					<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
					<?php //if(empty($img)){ ?>
						<a id="addImg" class="dropdown-item" href="#">Image illustrative</a>
					<?php //} ?>
					<!-- <div class="dropdown-divider"></div> -->
					<?php //if(empty($plaquette)){ ?>
						<!-- <a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a> -->
					<?php //} ?> 
					<div class="dropdown-divider"></div>
					<?php //if(empty($video)){ ?>
						<a id="addVideo" class="dropdown-item" href="#">Video illustrative</a>
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
											<input  type="text" name="video" class="form-control" id="fname" placeholder="Saisir le lien youtube de votre video">
										</div>
									</div>
								
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
		

		</div>

	</div>
</div>