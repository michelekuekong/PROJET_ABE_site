<form class="form-horizontal" action="index.php?action=Agence&saction=add" method="POST" >

    <div class="form-row" style="padding-left:10px">
		
		<div class="form-group col-md-6">
			<label class="control-label col-sm-2" for="code">Nom:</label>
	             <div class="col-sm-10">
		         <input type="text" class="form-control" id="nom" placeholder="Entrez le nom" style="width:300px;border-radius:8px" name="nom" required>
	             </div>
	     </div>

		<div class="  form-group  col-md-6">
		  <label for="sel1">Nature</label>
		  <select class="form-control" id="sel1" name="siege_sociale">

		  	<?php if(empty($this->getSiege_sociale())){ ?>
		    <option value="1">Direction générale</option>
			<?php } ?>

		    <option value="0">Operational site</option>
		  
		  </select>
		
	    </div>
	</div>

				 
        <hr>
     <div style="float: right; padding-right:15px; padding-bottom:15px">
     	<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
		<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
		
	</div>

</form>
