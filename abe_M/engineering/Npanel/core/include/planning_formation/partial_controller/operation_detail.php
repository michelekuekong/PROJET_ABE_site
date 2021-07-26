<?php 
if($saction=="Detail"){
	

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);

		if($ssaction=='update'){
			if(isset($lieu)  && !empty($lieu)){
				$lieu = str_replace("'", "\'", htmlspecialchars($lieu));
				$param=[];
				$param[0]['col']='lieu';
				$param[0]['val']=ucfirst($lieu);
				$resultat=$this->updateParamById($action, $param, $id);
				// message
				$msg=$this->getSms($resultat);
			
			}
			if(isset($debut)  && !empty($debut)){
				$param=[];
				$param[0]['col']='debut';
				$param[0]['val']=$debut;
				$resultat=$this->updateParamById($action, $param, $id);
				// message
				$msg=$this->getSms($resultat);
			
			}
			if(isset($fin)  && !empty($fin)){
				$param=[];
				$param[0]['col']='fin';
				$param[0]['val']=$fin;
				$resultat=$this->updateParamById($action, $param, $id);
				// message
				$msg=$this->getSms($resultat);
			}
		}
		
	}

	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$lieu= $data[0]->getLieu();
	$debut = $data[0]->getDebut();
	$fin = $data[0]->getFin();
	$statut = $data[0]->getStatut();
	
}