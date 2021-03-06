<!-- position presentation -->
<div class="col-12 editor_nom">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">position</h5>
			<hr>
			
			<?php if(!empty($nom)){ ?>

			<p><?= ucfirst($nom)  ?></p>
	
		
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
						renseignez une position
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<?php $position = $this->AllData('position_banniere'); ?>
						<select id="id_position" class="form-control" name="id_position" style="width:300px;border-radius:8px">
						 	<?php foreach ($position as $key => $value) { ?>
						    <option value="<?= $value->getId(); ?>" <?php if($id_post == $value->getId()){echo "selected";} ?> > <?= $value->getNom(); ?> </option>
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
<!-- texte1 -->
<div class="col-12 editor_texte1">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Texte1</h5>
			<hr>
			
			<?php if(!empty($texte1)){ ?>

			<p><?= $texte1 ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un texte
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_texte1" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editez un texte
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($texte1 )){ echo 'Saisir votre texte ici'; } ?>" name="texte1" class="form-control"><?php if(!empty($texte1 )){ ?><?= trim($texte1) ?><?php } ?></textarea> 
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
<!-- texte2 -->
<div class="col-12 editor_texte2">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Texte2</h5>
			<hr>
			
			<?php if(!empty($texte2)){ ?>

			<p><?= $texte2 ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un texte
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_texte2" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editez un texte
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($texte2)){ echo 'Saisir votre texte ici'; } ?>" name="texte2" class="form-control"><?php if(!empty($texte2)){ ?><?= trim($texte2) ?><?php } ?></textarea> 
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
<!-- texte3 -->
<div class="col-12 editor_texte3">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Texte3</h5>
			<hr>
			
			<?php if(!empty($texte3)){ ?>

			<p><?= $texte3 ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un texte
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_texte3" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editez un texte
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($texte3)){ echo 'Saisir votre texte ici'; } ?>" name="texte3" class="form-control"><?php if(!empty($texte3)){ ?><?= trim($texte3) ?><?php } ?></textarea> 
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
	<h5 class="card-title"> <strong>Illustration banniere</strong> </h5>
		<!-- image -->
		<?php if(!empty($img)){ ?>
	    <hr>
        <div class="el-card-content" style="padding-bottom: 20px">
            <h4 class="m-b-0">Image</h4>
        </div>
		<?php 
		  $param=[];
		  $param[0]['col']='id_banniere';
		  $param[0]['val']=$id;
		  $param[1]['col']='type';
		  $param[1]['val']='image';
		  $data_illustration=$this->getAllByParam('illustration_banniere',$param);  
		?>
		<div class="row el-element-overlay">
		<?php foreach ($data_illustration as $key => $value) { ?>
			<?php if($value->getOnline() != -1){ ?>
				<div class="col-lg-3 col-md-6">
					<div class=" card">
						<div class="el-card-item">
							<div class="el-card-avatar el-overlay-1"> <img src="../<?= $value->getLien() ?>" style="width: 250px; height: 200px" alt="picture">
								<div class="el-overlay">
									<ul class="list-style-none el-info">
										<li class="el-item"><a title="visualizer" class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $value->getLien() ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
										<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=illustration_banniere&saction=Img&id=<?= $value->getId()?>&ssaction=<?= ($value->getOnline()==1) ? 'putOffline' : 'putOnline' ?>" title="<?= ($value->getOnline()==1) ? 'D??publier' : 'Publier' ?>"><i class="fa fa-eye <?= ($value->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
										<li class="el-item"><a  title="delete" class="btn default btn-outline video-popup-vertical-fit el-link" href="index.php?action=Illustration_banniere&saction=Img&ssaction=delete&id=<?= $value->getId() ?>" ><i class="fa fa-trash"></i></a></li>
										<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_img<?= $value->getId() ?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modal_img<?= $value->getId() ?>" role="dialog" aria-labelledby="image" aria-hidden="true">
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
									<form class="form-horizontal" method="POST" action="index.php?action=illustration_banniere&saction=Img&ssaction=update&id=<?= $value->getId() ?>" enctype="multipart/form-data">
										<div class="custom-file">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
													<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg  1112 x 741 px</label>
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<div class="col-md-8 text-right">
												<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
														Valider
												</button>
												<button type="button" data-dismiss="modal" aria-label="Close" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
													Annuler
												</button>
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
					</div>
				</div>
   			<?php } ?>
			<?php } ?>
        </div>
		<?php } ?>

		<!-- Video-->
		<?php 
		  $param=[];
		  $param[0]['col']='id_banniere';
		  $param[0]['val']=$id;
		  $param[1]['col']='type';
		  $param[1]['val']='video';
		  $data_illustration=$this->getAllByParam('illustration_banniere',$param);
		?>  

		<?php if(!empty($video)){ ?>
	    <hr>
        <div class="el-card-content" style="padding-bottom: 20px">
            <h4 class="m-b-0">Video</h4>
        </div>
		<div class="row el-element-overlay">

		<?php foreach ($data_illustration as $key => $value) { ?>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> <video width="250" height="200" src="../dsc/<?= $value->getLien() ?>" type="video/mp4" controls preload='auto'> </video>
							<div class="el-overlay">
								<ul class="list-style-none el-info">
									<li class="el-item"><a title="visualizer" class="btn default btn-outline video-popup-vertical-fit el-link" href="../dsc/<?= $value->getLien() ?>" title="visualize" ><i class="mdi mdi-magnify-plus"></i></a></li>
									<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=illustration_banniere&saction=Img&id=<?= $value->getId()?>&ssaction=<?= ($value->getOnline()==1) ? 'putOffline' : 'putOnline' ?>" title="<?= ($value->getOnline()==1) ? 'D??publier' : 'Publier' ?>"><i class="fa fa-eye <?= ($value->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
									<li class="el-item"><a title="delete" class="btn default btn-outline video-popup-vertical-fit el-link" href="index.php?action=illustration_banniere&saction=Img&ssaction=delete&id=<?= $value->getId() ?>" ><i class="fa fa-trash"></i></a></li>
									<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_video<?= $value->getId() ?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modal_video<?= $value->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="video" aria-hidden="true">
					<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
								<h5 class="modal-title" id="exampleModalLongTitle">
									Modification de la video
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
								<form class="form-horizontal" method="POST" action="index.php?action=illustration_banniere&saction=Img&ssaction=update&id=<?= $value->getId() ?>" enctype="multipart/form-data">
									<div class="custom-file">
										<div class="form-group row">
											<div class="col-sm-12">
												<input type="file" class="custom-file-input" id="validatedCustomFile" name="video">
												<label class="custom-file-label" for="validatedCustomFile">Importer une video *.mp4 </label>
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
			</div>
		<?php } ?>
        </div>    
		<?php } ?>
		<?php if(1==1){ ?>
		<div class="col-md-3 col-sm-12" id="AddPj">
			<div class="btn-group">
					<button type="button" class="btn btn-primary">Nouvelle Pi??ce jointe</button>
					<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
					<?php //if(empty($img)){ ?>
						<a id="addImg" class="dropdown-item" href="#">Ajouter une Image</a>
					<?php //} ?>
					<!-- <div class="dropdown-divider"></div> -->
					<?php //if(empty($plaquette)){ ?>
						<!-- <a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a> -->
					<?php //} ?> 
					<div class="dropdown-divider"></div>
					<?php //if(empty($video)){ ?>
						<a id="addVideo" class="dropdown-item" href="#">Ajouter une Video</a>
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
							<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de dimension 1112 x 741 px </label>
							
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
				</div>					
				<div class="form-group row" style="margin-top: 30px">
					<button  style="margin-right: 10px" type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
							Valider
					</button>
					<button type="button" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
						Annuler
					</button>
				</div> 
			</form>
	
		
		</div>

	</div>
</div>

<form id="modify_video" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $value->getId()?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
				
			        <div class="form-row" style="padding-left:10px">
						<div class="form-group col-md-6">
							<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Derouler</button>
							<div style="background-color: #ccc" class="dropdown-menu">
								<a id="mod1" class="dropdown-item" style="cursor: pointer;">mofier la video</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">depublier la video</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">supprimer la video</a>
							</div>
					     </div>
					</div>
				
			        <div class="form-row" style="padding-left:10px">
						<div class="col-4" style="text-align:center; margin-top:50px;">
							<button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</form>