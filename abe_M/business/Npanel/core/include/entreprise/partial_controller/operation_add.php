<?php 
//définition de param
$param=$this->getParam();
extract($_POST);
// la table Entreprise doit avoir un et un seul élément actif
$param=[];
$param[0]['col']='online';
$param[0]['val']='1';
if(empty($this->getAllByParam($action,$param))){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getSms($resultat);



