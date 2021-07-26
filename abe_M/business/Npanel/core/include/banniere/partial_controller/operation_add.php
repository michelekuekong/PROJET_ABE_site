<?php 
//définition de param
$param=$this->getParam();
$resultat=0;
//var_dump($param); 
//var_dump($this->getAllByParam($action,$param)) ;exit;
// eviter les doublons sur le nom de photo
if(empty($this->getAllByParam($action,$param))){
	if($this->Add($action,$param)){
		$resultat=1;
	}
}
header("Location:index.php?action=Banniere&resultat=".$resultat);
exit;


