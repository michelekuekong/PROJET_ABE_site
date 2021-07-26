<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$titre= $data[0]->getTitre();
	$resume=$data[0]->getCode();

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		extract($_POST);
		$titre = str_replace("'", "\'", $titre);
		if(isset($titre)  && !empty($titre)){
			$param=[];
			$param[0]['col']='titre';
			$param[0]['val']=ucfirst(strtolower($titre));
			$param[1]['col']='code';
			$param[1]['val']=ucfirst(strtolower($titre));
			
			$reponse=$this->getAllByParam($action, $param);
			if(empty($reponse)){
				$resultat = $this->updateParamById($action, $param, $id);
			}else{
				$resultat = 0;
			}
			// message
			$msg=$this->getSms($resultat);
		}
	}
}