<form class="form-horizontal" action="index.php?action=Entreprise&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Raison sociale:</label>
			        <div class="col-sm-10">
				         <input type="text" class="form-control" id="nom" placeholder="Entrez le nom" style="width:300px;border-radius:8px" name="nom" required>
			        </div>
			     </div>

			     <div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Tel:</label>
			        <div class="col-sm-10">
				         <input type="text" class="form-control" id="tel" placeholder="Entrez le numero de téléphone principale de la société" style="width:300px;border-radius:8px" name="tel" required>
			        </div>
			     </div>

			     <div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Fax:</label>
			        <div class="col-sm-10">
				         <input type="text" class="form-control" id="fax" placeholder="Entrez le numero de fax principale de la société" style="width:300px;border-radius:8px" name="fax" >
			        </div>
			     </div>

			      <div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Email:</label>
			        <div class="col-sm-10">
				         <input type="text" class="form-control" id="email" placeholder="Entrez l'adresse E-mail principale de la société" style="width:300px;border-radius:8px" name="email" >
			        </div>
			     </div>

			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	