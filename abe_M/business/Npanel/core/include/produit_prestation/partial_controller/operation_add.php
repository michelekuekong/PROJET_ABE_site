<?php 
extract($_POST);
//définition de param
$param=$this->getParam();
$test=$this->getColsByCol($action, 'id', 'titre', $titre);
// eviter les doublons sur le nom de photo
if(empty($test)){
	if($prix>0){
		$resultat=$this->Add($action,$param);
	} else{
		$resultat=0;
	} 
}else{
	$resultat=0;
}
// message
$msg=$this->getSms($resultat);


