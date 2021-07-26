<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$titre= $data[0]->getTitre();
	$resume=$data[0]->getResume();

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		extract($_POST);
		if(!empty($titre) && isset($titre)){
			$param=[];
			$param[0]['col']='titre';
			$param[0]['val']=str_replace("'", "\'", $titre);

			$reponse=$this->getAllByParam($action, $param);
			if(empty($reponse)){
				$this->updateParamById($action, $param, $id);
				$resultat = 1;
			}else {
				$resultat = 0;
			}
			// message
			$msg=$this->getSms($resultat);
		}
		if(!empty($resume) && isset($resume)){
			$param=[];
			$param[0]['col']='resume';
			$param[0]['val']=str_replace("'", "\'", $resume);
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
	}
}