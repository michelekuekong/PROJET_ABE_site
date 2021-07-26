<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);
		if(isset($nom)){
			if(empty($this->getColsByCol('position_presentation','id', 'nom', $nom ))){
				$param=[];
				$param[0]['col']='nom';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
				$resultat=$this->updateParamById($action, $param, $id);
			}else{
				$resultat=0;
			}
			
			$msg=$this->getSms($resultat);
		}	
	}
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();
}