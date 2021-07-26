<form class="form-horizontal" action="index.php?action=Management_team&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
			<label class="control-label col-sm-10" for="code">Nom:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="nom" placeholder="Entrez le nom" style="width:300px;border-radius:8px" name="nom" required>
		             </div>
		    </div>
			<div class="form-group col-md-6">
			<label class="control-label col-sm-10" for="code">fonction:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="fonction" placeholder="Entrez votre fonction" style="width:300px;border-radius:8px" name="fonction" required>
		             </div>
		     </div>
			</div>
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
			<label class="control-label col-sm-10" for="code">Adresse email:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="email" placeholder="Entrez votre adresse email" style="width:300px;border-radius:8px" name="email">
		             </div>
		    </div>
			<div class="form-group col-md-6">
			<label class="control-label col-sm-10" for="code">Departement:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="departement" placeholder="Entrez votre departement" style="width:300px;border-radius:8px" name="departement">
		             </div>
		     </div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	