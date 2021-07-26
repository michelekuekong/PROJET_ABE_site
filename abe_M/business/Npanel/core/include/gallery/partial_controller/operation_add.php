<?php 
//définition de param
extract($_POST); 
$param=$this->getParam();
// eviter les doublons sur le nom de photo
if(empty($this->getColsByCol('gallery', 'id', 'titre', $titre ))){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getSms($resultat);


