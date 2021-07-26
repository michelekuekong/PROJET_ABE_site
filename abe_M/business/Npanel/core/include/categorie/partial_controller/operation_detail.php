<?php 
if($saction=="Detail"){
	
	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);
		if(!empty($nom) && isset($nom) ){
			if(empty($this->getColsByCol('categorie', 'id', 'nom', $nom ))){

				$param=[];
				$param[0]['col']='nom';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
				$resultat=$this->updateParamById($action, $param, $id);
			}else{
				$resultat=0;
			}
			// message
			$msg=$this->getSms($resultat);$msg=$this->getSms($resultat);
		}
	}
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();
}