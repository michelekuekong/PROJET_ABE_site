<?php 
//définition de param
$param=$this->getParam();
$resultat=0;
extract($_POST);
// eviter les doublons sur le nom de photo
if(empty($this->getColsByCol('management_team', 'id', 'nom', $nom ))){
	$resultat=(!empty($this->Add($action,$param))?1:0); 
}
header("Location:index.php?action=".$action."&resultat=".$resultat);


