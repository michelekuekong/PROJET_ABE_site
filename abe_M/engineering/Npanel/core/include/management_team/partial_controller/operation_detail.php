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
		$resultat=0;
		extract($_POST);
		if(isset($nom)){

			if (empty($this->getColsByCol('management_team', 'id', 'nom', $nom ))){
				$param=[];
				$param[0]['col']='nom';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
				$resultat=$this->updateParamById($action, $param, $id);
			}
			
		
		}
		if(isset($fonction)){
			$param=[];
			$param[0]['col']='fonction';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($fonction));
			$resultat=$this->updateParamById($action, $param, $id);
			
		}

		if(isset($facebook)){
			if (empty($this->getColsByCol('management_team', 'id', 'compte_linkedin', $facebook ))){
				$param=[];
				$param[0]['col']='compte_facebook';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($facebook));
				$resultat=$this->updateParamById($action, $param, $id);
			}
			
		}
		if(isset($linkedin)){
			if (empty($this->getColsByCol('management_team', 'id', 'compte_linkedin', $linkedin ))){
				$param=[];
				$param[0]['col']='compte_linkedin';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($linkedin));
				$resultat=$this->updateParamById($action, $param, $id);
			}
		
		}
		if(isset($twitter)){
			if (empty($this->getColsByCol('management_team', 'id', 'compte_twitter', $twitter ))){
				$param=[];
				$param[0]['col']='compte_twitter';
				$param[0]['val']=$twitter;
				$resultat=$this->updateParamById($action, $param, $id);
			}
		
		}
		if(isset($instagram)){
			if (empty($this->getColsByCol('management_team', 'id', 'compte_instagram', $instagram ))){
				$param=[];
				$param[0]['col']='compte_instagram';
				$param[0]['val']=$instagram;
				$resultat=$this->updateParamById($action, $param, $id);
			}
		
		}
		if(isset($departement)){
			$param=[];
			$param[0]['col']='departement';
			$param[0]['val']=$departement;
			$resultat=$this->updateParamById($action, $param, $id);
			
		}
		if(isset($email)){
			if (empty($this->getColsByCol('management_team', 'id', 'email', $email ))){
				if (filter_var($email, FILTER_VALIDATE_EMAIL)){
					$param=[];
					$param[0]['col']='email';
					$param[0]['val']=$email;
					$resultat=$this->updateParamById($action, $param, $id);
				}
			}
		
		}
		if(isset($description)){
			$param=[];
			$param[0]['col']='description';
			$param[0]['val']=$description;
			$resultat=$this->updateParamById($action, $param, $id);
			
		
		}
		// traitement des fichiers
		if(isset($_FILES)){
			$size=30*1024*1024;
			// insert image
			if(!empty($_FILES) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../assets/img/team/'.formaterNameFile($nom).$id.$file_extension;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]==600 && $dim[1]==600){
						if(move_uploaded_file($file_tmp_name, $destination)){

							$param=[];
							$param[0]['col']='img';
							$param[0]['val']='assets/img/team/'.formaterNameFile($nom).$id.$file_extension;
							$param[1]['col']='online';
							$param[1]['val']=1;

							$resultat=$this->updateParamById($action,$param,$id);
							
						}
					} else { 
					            $msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *600x600* 
					                </div>'; }
				} else { 
			            $msg='<div class="alert alert-warning alert-dismissible">
			                  <button type="button" class="close" data-dismiss="alert">&times;</button>
			                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *600x600* 
			                </div>';
			 			}
				// return $response;
			}
		}
	 header("Location:index.php?action=".$action."&saction=Detail&id=".$id."&resultat=".$resultat);
	 exit;
	}//FIN ssaction
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();
	$description=$data[0]->getDescription();
	$fonction = $data[0]->getFonction();
	$facebook=$data[0]->getCompte_facebook();
	$twitter=$data[0]->getCompte_twitter();
	$instagram = $data[0]->getCompte_instagram();
	$linkedin = $data[0]->getCompte_linkedin();
	$departement = $data[0]->getDepartement();
	$email=$data[0]->getEmail();
	$img=$data[0]->getImg();
	$online=$data[0]->getOnline();

	if(isset($resultat))$msg=$this->getSms($resultat);
}