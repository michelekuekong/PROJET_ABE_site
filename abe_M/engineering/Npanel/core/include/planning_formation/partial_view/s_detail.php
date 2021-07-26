<!-- Lieu -->
<div class="col-12 editor">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Lieu de la formation</h5>
			<hr>
			
			<?php if(!empty($lieu )){ ?>

			<p><?= str_replace("\'", "'", $lieu)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter le lieu
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
						Editer le lieu de la formation
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="lieu" class="form-control" value="<?= (!empty($lieu )) ? trim($lieu) : '' ?>">
					
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
<!-- lieu -->

<!-- date debut -->
<div class="col-12 editor_auteur">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Debut de la formation</h5>
			<hr>
			
			<?php if(!empty($debut )){ ?>

			<p>
			<?php 
				$date = date_parse($debut);
				$day = $date['day'];
				$annee = $date['year'];
				setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
				$month = strftime("%B",strtotime($debut));
				$mois = utf8_encode($month);
				$date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
				echo $date_format;
			?>
			</p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la date de debut
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_auteur" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Debut de la formation</strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="date" name="debut" class="form-control" value="<?= (!empty($debut )) ? $debut : '' ?>">
					
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
<!-- date debut -->


<!-- Date fin -->
<div class="col-12 editor_date_ref">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Fin de la formation</h5>
			<hr>
			
			<?php if(!empty($fin )){ ?>

			<p><?php 
				
				$date = date_parse($fin);
				$day = $date['day'];
				$annee = $date['year'];
				setlocale(LC_TIME, 'fr_FR', 'fra_FRA');
				$month = strftime("%B",strtotime($fin));
				$mois = utf8_encode($month);
				$date_format = (!empty($day) && !empty($annee)) ? $day." ".$mois." ".$annee : " "; 
                echo $date_format;
			  ?>
			</p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la date de fin
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
						Renseignez la date de fin
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="date" name="fin" class="form-control" value="<?= $fin ?>">
					
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
<!-- Date_mj -->

