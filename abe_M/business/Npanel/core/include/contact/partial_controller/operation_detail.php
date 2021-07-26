<?php 
if($saction=="Detail"){		
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);
	$type=$data[0]->getType();
	$valeur = $data[0]->getValeur();

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);
		if(isset($type)){
			$param=[];
			$param[0]['col']='type';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($type));
			$resultat=$this->updateParamById($action, $param, $id);
			$msg=$this->getSms($resultat);
		
		}
		if(isset($valeur)){
			if(empty($this->getColsByCol('contact', 'id', 'valeur', $valeur )) ){
				if ($type=="Email") {
					if (filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
						$param=[];
						$param[0]['col']='valeur';
						$param[0]['val']=str_replace("'", "\'", htmlspecialchars($valeur));
						$resultat=$this->updateParamById($action, $param, $id); 
					}else{$resultat=0;}
				}
				if ($type=="Tel") {
					if (preg_match("/^[0-9 ]*$/", $valeur)) {
						$param=[];
						$param[0]['col']='valeur';
						$param[0]['val']=str_replace("'", "\'", htmlspecialchars($valeur));
						$resultat=$this->updateParamById($action, $param, $id); 
					}else{$resultat=0;}
				}
			}else{$resultat=0;}
			$msg=$this->getCheck_email_phone($resultat);
		}
		if(isset($id_agence)){
			$param=[];
			$param[0]['col']='id_agence';
			$param[0]['val']=$id_agence;
			$resultat=$this->updateParamById($action, $param, $id);
			$msg=$this->getSms($resultat);
		}
	} 		
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$agence= $this->getColsByCol('agence', 'nom', 'id', $data[0]->getId_agence());
	$type=$data[0]->getType();
	$valeur = $data[0]->getValeur();
	$id_agence = $data[0]->getId_agence();

}