<?php 
if($saction=="Detail"){
	$data=[];
	$param=[];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom = $data[0]->getNom();
	$description = $data[0]->getDescription();
	$date_reference = $data[0]->getDate_reference();
	$chiffre = $data[0]->getChiffre();
	$type = $data[0]->getType();
	$img = $data[0]->getLogo();
	$site_web = $data[0]->getSite_web();


	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		extract($_POST);
		
		if(isset($nom) && !empty($nom)){
			$param=[];
			$param[0]['col']='nom';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
			$reponse=$this->getAllByParam($action, $param);
			if(empty($reponse)){
				
				$resultat = $this->updateParamById($action, $param, $id);
			}else {
				// $reponse="Ce nom existe déjà!";
				$resultat= 0;
			}
			// message
			$msg=$this->getSms($resultat);
			
		}
		if(isset($description) && !empty($description)){
			$param=[];
			$param[0]['col']='description';
			$param[0]['val']=str_replace("'", "\'", $description);
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
		if(isset($type) && !empty($type)){
			$param=[];
			$param[0]['col']='type';
			$param[0]['val']=ucfirst(strtolower($type));
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
		if(isset($chiffre) && !empty($chiffre)){
			$param=[];
			$param[0]['col']='chiffre';
			$param[0]['val']=(int)$chiffre;
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
		if(isset($site_web) && !empty($site_web)){
			$param=[];
			$param[0]['col']='site_web';
			$param[0]['val']=htmlspecialchars(trim($site_web));
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
		if(isset($date_reference) && !empty($date_reference)){
			$param=[];
			$param[0]['col']='date_reference';
			$param[0]['val']=$date_reference;
			$resultat = $this->updateParamById($action, $param, $id);
			// message
			$msg=$this->getSms($resultat);
		}
		if(isset($_FILES)){
			// taille max de l'image
			$size=5*1024*1024;
			if(!empty($_FILES) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../assets/img/testimonials/'.formaterNameFile($file_name);;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]==250 && $dim[1]==165){
						if(move_uploaded_file($file_tmp_name, $destination)){
							$param=[];
							$param[0]['col']='logo';
							$param[0]['val']='assets/img/testimonials/'.formaterNameFile($file_name);
							$this->updateParamById($action, $param, $id);
							header('Location:index.php?action=Reference&saction=Detail&id='.$id.'&type='.$type.'#bloc_file');
							// header('Location:index.php?action=Reference&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
						}
					} else{
						$msg='<div class="alert alert-warning alert-dismissible">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *250x165* 
							</div>';
					}
				} else {
					$msg='<div class="alert alert-warning alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *250x165* 
						</div>'; 
				}
				// return $response;
			}
		}
	}
	$data=[];
	$param=[];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom = $data[0]->getNom();
	$description = $data[0]->getDescription();
	$date_reference = $data[0]->getDate_reference();
	$chiffre = $data[0]->getChiffre();
	$type = $data[0]->getType();
	$img = $data[0]->getLogo();
	$site_web = $data[0]->getSite_web();
 } 