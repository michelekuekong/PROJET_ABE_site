<?php 
if($saction=="Detail"){




	if(isset($ssaction)){
		$param[0]['col']='closing';
		$param[0]['val']=$ssaction;
		$this->updateParamById($action,$param,$id);

	}

	$data=[];
	$param=[];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);
	if(!empty($data)){
		//var_dump($data);
		//about prospect
		$nom_prospect= $data[0]->getNom_prospect();
		$tel_prospect= $data[0]->getTel_prospect();
		$email_prospect=$data[0]->getEmail_prospect();
		$fonction_prospect= $data[0]->getFonction_prospect();
		//about Company
		$nom_company= $data[0]->getNom_entreprise();
		$tel_company= $data[0]->getTel_entreprise();
		$fax_company= $data[0]->getFax_entreprise();
		$email_company=$data[0]->getEmail_entreprise();		
		$adresse_company= $data[0]->getAdresse_entreprise();
		$site_web_company= $data[0]->getSite_web_entreprise();
		//about besoin
		$description=$data[0]->getDescription();
		$date_creation=$data[0]->getDate_creation();
		$date_demarrage=$data[0]->getDate_demarrage();
		$objet=$data[0]->getObjet();
		//about etat
		$statut=$data[0]->getStatut();
	   	$closing=$data[0]->getClosing();
	   	//changement de statut 
	   	if($statut==0){
			$param[0]['col']='statut';
    		$param[0]['val']=1;
    		$this->updateParamById($action,$param,$id);
		}


	}else{
		header("Location:index.php?action=devis");
	}
	
	
}