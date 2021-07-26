<?php 
//définition de param
$param=$this->getParam();
// eviter les doublons sur le nom de photo
extract($_POST);
if(empty($this->getColsByCol('contact', 'id', 'valeur', $valeur )) ){
	if ($type=="Email") {
		if (filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
			$resultat=$this->Add($action,$param); 
		}else{$resultat=0;}
	}
	if ($type=="Tel") {
		if (preg_match("/^[0-9 ]*$/", $valeur)) {
			$resultat=$this->Add($action,$param); 
		}else{$resultat=0;}
	}

}else{
	$resultat=0;
}
// message
$msg=$this->getMsg($resultat);
$msg=$this->getCheck_email_phone($resultat);


