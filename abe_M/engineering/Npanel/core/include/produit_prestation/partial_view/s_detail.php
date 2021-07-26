<!-- Nom -->
<div class="col-12 editor">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom de la prestation</h5>
			<hr>
			
			<?php if(!empty($titre )){ ?>

			<p><?= str_replace("\'", "'", $titre)  ?></p>
	
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
						Editer le titre de la prestation
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="titre" class="form-control" value="<?= (!empty($titre )) ? trim($titre) : '' ?>">
					
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

<!-- Categorie -->
<div class="col-12 editor_source">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Categorie de la Prestation</h5>
			<hr>
			
			<?php if(!empty($prest_parent)){ ?>

			<p><?= $prest_parent ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la categorie
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_source" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Choisir la categorie
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 200px;">
						<select id="id_parent" class="form-control custom-select" name="id_prestation" style="width:300px;border-radius:8px">
							<?php
								$param=[];
								$param[0]['col'] = 'online';
								$param[0]['val'] = 1;
								$cat = $this->getAllByParam('prestation', $param);
							?>
							<?php foreach($cat as $key => $value) : ?>
								<option value="<?= $value->getId() ?>" <?= ($id_parent==$value->getId())?'selected':'' ?>><?= $value->getTitre() ?></option>
							<?php endforeach; ?>
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
<!-- categorie -->

<!-- resume -->
<div class="col-12 editor_resume">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Résumé de la prestation</h5>
			<hr>
			
			<?php if(!empty($resume )){ ?>

			<p><?= str_replace("\'", "'", $resume)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un bref résumé
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_resume" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer le resume de la prestation
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($resume )){ echo 'Saisir votre texte ici'; } ?>" name="resume" class="form-control"><?php if(!empty($resume )){ ?><?= trim($resume) ?><?php } ?></textarea> 
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
<!-- Resumé -->

<!-- contenu -->
<div class="col-12 editor_contenu">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Contenu de la prestation</h5>
			<hr>
			
			<?php if(!empty($contenu)){ ?>

			<p><?= str_replace("\'", "'", $contenu)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter le contenu
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_contenu" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer le contenu de la prestation
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="contenu"  placeholder="<?php if(empty($contenu )){ echo 'Saisir votre texte ici'; } ?>" name="description" class="form-control"><?php if(!empty($contenu )){ ?><?= trim($contenu) ?><?php } ?></textarea> 
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
<!-- contenu -->


<!-- prix -->
<div class="col-12 editor_date_ref">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Prix</h5>
			<hr>
			
			<?php if(!empty($prix )){ ?>

			<p><?= number_format($prix, 0, ","," ") ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter le prix
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_date_ref" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez le prix
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="number" name="prix" class="form-control" value="<?= $prix ?>">
					
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
<!-- prix -->

<!-- timing -->
<div class="col-12 editor_timing">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Duree</h5>
			<hr>
			
			<?php if(!empty($timing )){ ?>

			<p><?= str_replace("\'", "'", $timing)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la duree
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_timing" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer la duree
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="timing" class="form-control" value="<?= (!empty($timing )) ? trim($timing) : '' ?>">
					
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
<!-- timing -->

<!-- mode -->
<div class="col-12 editor_mode">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Mode</h5>
			<hr>
			
			<?php if($mode!=0 || $mode!=1){ ?>

			<p><?= ($mode==1) ? "Online" : "Présentielle" ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la categorie
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_mode" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Choisir la mode
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 200px;">
						<select id="id_parent" class="form-control custom-select" name="mode" style="width:300px;border-radius:8px">
							
							<option value="1" <?= ($mode==1)?'selected':'' ?>>Online</option>
							<option value="0" <?= ($mode==0)?'selected':'' ?>>Présentielle</option>
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
<!-- mode -->

<!-- Certifiante -->
<div class="col-12 editor_certif">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Certifiante?</h5>
			<hr>
			
			<?php if($certif!=0 || $certif!=1){ ?>

			<p><?= ($certif==1) ? "Certifiante" : "Diplômante" ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la categorie
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_certif" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Définir si certifiante ou non
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 200px;">
						<select id="id_parent" class="form-control custom-select" name="certif" style="width:300px;border-radius:8px">
							
							<option value="1" <?= ($certif==1)?'selected':'' ?>>Certifiante</option>
							<option value="0" <?= ($certif==0)?'selected':'' ?>>Diplômante</option>
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
<!-- certifiante -->


<!-- Piece jointe-->
<div class="card">
	<div class="card-body">
		<h5 class="card-title" id="bloc_file"> Pièces jointes</h5>
		<hr>

		<!-- image -->
		<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title">Images</h6>
			</div>
			<?php foreach($data_illustration as $key => $value) : ?>
				<?php if($value->getType()=='image'){ ?>
					<?php if($value->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"> <img src="../<?= $value->getLien() ?>" alt="user" />
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $value->getLien() ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=<?= ($value->getOnline()==1) ? 'putOffline' : 'putOnline' ?>&id_prestation=<?=$value->getId_produit_prestation()?>" title="<?= ($value->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-eye <?= ($value->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=del&id_prestation=<?=$value->getId_produit_prestation()?>" title="Supprimer"><i class="fa fa-trash"></i></a></li>
												<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_img<?=$value->getId()?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
						<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId() ?>&ssaction=update&id_prestation=<?= $value->getId_produit_prestation() ?>" enctype="multipart/form-data">
						<!-- modal de modif -->
							<div class="modal fade" id="modal_img<?=$value->getId()?>" role="dialog" aria-labelledby="image" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
											<h5 class="modal-title" id="exampleModalLongTitle">
												Modification <?= str_replace('_', ' ', $value->getType()) ?>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required accept=".png, .jpg, .jpeg">
													<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 600x400 ... </label>
													
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
										</div>
									
									</div>
								</div>
							</div>
						</form>
					<?php } ?>
				<?php } ?>
			<?php endforeach; ?>
		</div>
		<hr>

		<!-- image de banniere -->
		<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title">Images de bannière</h6>
			</div>
			<?php foreach($data_illustration as $key => $value) : ?>
				<?php if($value->getType()=='Ban'){ ?>
					<?php if($value->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"> <img src="../<?= $value->getLien() ?>" alt="user" />
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $value->getLien() ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=<?= ($value->getOnline()==1) ? 'putOffline' : 'putOnline' ?>&id_prestation=<?=$value->getId_produit_prestation()?>" title="<?= ($value->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-eye <?= ($value->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=del&id_prestation=<?=$value->getId_produit_prestation()?>" title="Supprimer"><i class="fa fa-trash"></i></a></li>
												<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_img_ban<?= $value->getId() ?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
						<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId() ?>&ssaction=update&id_prestation=<?= $value->getId_produit_prestation() ?>" enctype="multipart/form-data">
						<!-- modal de modif -->
						<div class="modal fade" id="modal_img_ban<?= $value->getId() ?>" role="dialog" aria-labelledby="image" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
										<h5 class="modal-title" id="exampleModalLongTitle">
											Modification <?= str_replace('_', ' ', $value->getType()) ?>
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="validatedCustomFile" name="img_ban" required accept=".png, .jpg, .jpeg">
												<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 1000x300 ... </label>
												
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
				<?php } ?>
			<?php endforeach; ?>
		</div>
		<hr>

		<!-- Plaquete pdf-->
		<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title" id="plaquette">Plaquettes</h6>
			</div>
			<?php for($k=0; $k<count($data_illustration); $k++) : ?>
				<?php $document=$data_illustration[$k]; ?>
				<?php if($document->getType()=='plaquette'){ ?>
					<?php if($document->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"><embed src="../<?= $document->getLien() ?>" type="application/pdf" width="300" height="200" />
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline el-link" href="../<?= $document->getLien() ?>" target="_blank" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $document->getId()?>&ssaction=<?= ($document->getOnline()==1) ? 'putOffline' : 'putOnline' ?>&id_prestation=<?=$document->getId_produit_prestation()?>" title="<?= ($document->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-eye <?= ($document->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $document->getId()?>&ssaction=del&id_prestation=<?=$document->getId_produit_prestation()?>" title="Supprimer"><i class="fa fa-trash"></i></a></li>
												<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_plaquette<?= $document->getId() ?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
						<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Img&id=<?= $document->getId() ?>&ssaction=update&id_prestation=<?= $document->getId_produit_prestation() ?>" enctype="multipart/form-data">
						<div class="modal fade" id="modal_plaquette<?= $document->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="plaquette" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
										<h5 class="modal-title" id="exampleModalLongTitle">
											Modification <?= str_replace('_', ' ', $document->getType()) ?>
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette" required accept=".pdf">
												<label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf </label>
												
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
				<?php } ?>
			<?php endfor; ?>
		</div>
		<hr>

		<!-- Video-->
		<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title" id="video">Videos</h6>
			</div>
				<?php for($r=0; $r<count($data_illustration); $r++) : ?>
					<?php $video=$data_illustration[$r]; ?>
					<?php if($video->getType()=='video'){ ?>
						<?php if($video->getOnline() != -1){ ?>
							<div class="col-lg-3 col-md-6">
								<div class="card">
									<div class="el-card-item">
										<div class="el-card-avatar el-overlay-1"><video src="../<?= $video->getLien() ?>" width="250" height="200" preload="auto"></video>
											<div class="el-overlay">
												<ul class="list-style-none el-info">
													<li class="el-item"><a class="btn default btn-outline video-popup-vertical-fit el-link" href="../<?= $video->getLien() ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
													<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $video->getId()?>&ssaction=<?= ($video->getOnline()==1) ? 'putOffline' : 'putOnline' ?>&id_prestation=<?=$video->getId_produit_prestation()?>" title="<?= ($video->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-eye <?= ($video->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
													<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $video->getId()?>&ssaction=del&id_prestation=<?=$video->getId_produit_prestation()?>" title="Supprimer"><i class="fa fa-trash"></i></a></li>
													<li class="el-item"><a type="button" data-toggle="modal" data-target="#modal_video<?= $video->getId() ?>" class="btn default btn-outline el-link" title="Modifier"><i class="fa fa-edit"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="el-card-content">
										</div>
									</div>
								</div>
							</div>
							<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Img&id=<?= $video->getId() ?>&ssaction=update&id_prestation=<?= $video->getId_produit_prestation() ?>" enctype="multipart/form-data">
							<div class="modal fade" id="modal_video<?= $video->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="video" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#18A4E5; color:#FFF">
											<h5 class="modal-title" id="exampleModalLongTitle">
												Modification <?= str_replace('_', ' ', $video->getType()) ?>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
												<div class="custom-file">
													<div class="form-group row">
														<div class="col-sm-12">
															<input type="file" class="custom-file-input" id="validatedCustomFile" name="video" required accept=".mp4">
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
						<?php } ?>
					<?php } ?>
				<?php endfor; ?>
		</div>
		<hr>

		<div class="row el-element-overlay">
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
						<div class="dropdown-divider"></div>
						<?php //if(empty($img)){ ?>
							<a id="addImgBan" class="dropdown-item" href="#">Image bannière</a>
						<?php //} ?>
						<div class="dropdown-divider"></div>
						<?php //if(empty($plaquette)){ ?>
							<a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a>
						<?php //} ?> 
						<div class="dropdown-divider"></div>
						<?php //if(empty($video)){ ?>
							<a id="addVideo" class="dropdown-item" href="#">Video illustrative</a>
						<?php //} ?>
						</div>
					</div><!-- /btn-group -->
				
				</div>
				
								
				<?php if(isset($resultat) && empty($resultat)){ ?>
					<div class="col-md-6 alert-warning">Ce fichier existe déjà pour cet article !</div>
				<?php } ?>
				<?php //} ?> 
				<div class="col-md-12 col-sm-12" id="DivFormAddPj">
					<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-md-8">
								<div id="importImg" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="image" accept=".png, .jpg, .jpeg">
									<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 600x400 ... </label>
									
								</div>
								<div id="importImgBan" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="img_ban" accept=".png, .jpg, .jpeg">
									<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg de taille 1000x300 ... </label>
									
								</div>
								<div id="importPlaqt" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette" accept=".pdf">
									<label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf </label>
									
								</div>
								<div id="importVideo" class="custom-file">
									<div class="form-group row">
											<div class="col-sm-12">
											<input type="file" class="custom-file-input" id="validatedCustomFile" name="video" accept=".mp4">
									<label class="custom-file-label" for="validatedCustomFile">Importer une video *.mp4 </label>
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
		<?php if(isset($error) && !empty($error)) echo '<div class="alert-warning col-md-12 text-center" style="padding: 10px;margin-top: 10px">'.$error.'</div>'; ?>
	</div>
</div>