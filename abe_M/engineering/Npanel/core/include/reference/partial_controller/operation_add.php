<?php 
extract($_POST);

if($_GET['type']=='Client' || $_GET['type']=='Partenaire'){
	
		$param=$this->getParam();
		$test=$this->getColsByCol($action, 'id', 'nom', $nom);
		// eviter les doublons sur le nom de photo
		if(empty($test)){
			$resultat=$this->Add($action,$param);
		}else{
			$resultat=0;
		}
				
}else{
	//définition de param
	$param=$this->getParam();
	$test=$this->getColsByCol($action, 'id', 'nom', $nom);
	// eviter les doublons sur le nom de photo
	if(empty($test) && $chiffre>0){
		$resultat=$this->Add($action,$param); 
	}else{
		$resultat=0;
	}
}
	// message
	$msg=$this->getSms($resultat);


