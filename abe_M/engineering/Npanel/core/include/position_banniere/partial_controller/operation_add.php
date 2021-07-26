<?php 
//définition de param
$param=$this->getParam();
// eviter les doublons sur le nom de photo
extract($_POST);  
if(empty($this->getColsByCol('position_banniere', 'id', 'nom', $nom ))){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getSms($resultat);

