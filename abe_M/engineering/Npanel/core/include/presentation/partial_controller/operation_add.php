<?php 
//définition de param
$param=$this->getParam();
// eviter les doublons sur le nom de photo
extract($_POST);  
if(empty($this->getColsByCol('presentation', 'id', 'rubrique', $rubrique ))){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getSms($resultat);

