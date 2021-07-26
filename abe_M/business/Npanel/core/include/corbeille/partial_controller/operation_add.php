<?php 
extract($_POST);
//définition de param
$param=$this->getParam();
// eviter les doublons sur le nom de photo
$test=$this->getColsByCol($action, 'id', 'titre', $titre);
if(empty($test)){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getMsg($resultat);


