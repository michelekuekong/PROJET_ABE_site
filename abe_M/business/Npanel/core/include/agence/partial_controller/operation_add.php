<?php 
//définition de param
$param=$this->getParam();
extract($_POST);
// eviter les doublons sur le nom de photo
if(empty($this->getColsByCol('agence', 'id', 'nom', $nom ))){

	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}

if(isset($resultat)){
	
	header("Location:index.php?action=Agence&resultat=".$resultat);
	exit;
}



