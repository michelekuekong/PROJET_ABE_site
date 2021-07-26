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
		$resultat=0;
		// Mise a jour des differents champs
		extract($_POST);
		if(!empty($nom) && isset($nom) ){
			if(empty($this->getColsByCol('agence', 'id', 'nom', $nom ))){
				$param=[];
				$param[0]['col']='nom';
				$param[0]['val']=str_replace("'", "\'", $nom);
				$resultat=$this->updateParamById($action, $param, $id);
			}
			
			
		
		}
		if(!empty($ville) && isset($ville) ){
			if(empty($this->getColsByCol('agence', 'id', 'ville', $ville ))){
				$param=[];
				$param[0]['col']='ville';
				$param[0]['val']=str_replace("'", "\'", $ville);
				$resultat=$this->updateParamById($action, $param, $id);
			}
		}
		if(isset($pays)){
			if(empty($this->getColsByCol('agence', 'id', 'pays', $pays ))){
				$param=[];
				$param[0]['col']='pays';
				$param[0]['val']=str_replace("'", "\'", $pays);
				$resultat=$this->updateParamById($action, $param, $id);
			}
		
		}
		if(isset($adresse)){
			if(empty($this->getColsByCol('agence', 'id', 'adresse', $adresse ))){
				$param=[];
				$param[0]['col']='adresse';
				$param[0]['val']=str_replace("'", "\'", $adresse);
				$resultat=$this->updateParamById($action, $param, $id);
			}
		
		}
		if(isset($description)){
			if(empty($this->getColsByCol('agence', 'id', 'description', $description ))){
				$param=[];
				$param[0]['col']='description';
				$param[0]['val']=$description;
				$resultat=$this->updateParamById($action, $param, $id);
			
			}		
		}
		if(isset($slogan)){
			if(empty($this->getColsByCol('agence', 'id', 'slogan', $slogan ))){
				$param=[];
				$param[0]['col']='slogan';
				$param[0]['val']=$slogan;
				$resultat=$this->updateParamById($action, $param, $id);	
			}	
		
		}
		// traitement des fichiers
		if(isset($_FILES)){
			$size=30*1024*1024;
			// insert image
			if(!empty($_FILES['image']) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../dsc/assets/img/'.formaterNameFile($nom).$id.$file_extension;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]==700 && $dim[1]==500){
						if(move_uploaded_file($file_tmp_name, $destination)){

							$param=[];
							$param[0]['col']='logo';
							$param[0]['val']='assets/img/'.formaterNameFile($nom).$id.$file_extension;
							$param[1]['col']='online';
							$param[1]['val']=1;

							$resultat=$this->updateParamById($action,$param,$id);
							$msg=$this->getSms($resultat);	
						}
					} else { 
					            $msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *700x500* 
					                </div>'; }
				}else { 
				            $msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *700x500* 
				                </div>'; }
				// return $response;
			}
			// insert Doc
			if(isset($_FILES['plaquette']) && !empty($_FILES['plaquette'])){
				if($_FILES['plaquette']['error']==0 && $_FILES['plaquette']['size'] <= $size){
					$file_name = $_FILES['plaquette']['name'];
					$file_tmp_name = $_FILES['plaquette']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../dsc/assets/img/plaquette/'.formaterNameFile($nom).$id.$file_extension;

					$tab_extension = array('.pdf');

					if(in_array($file_extension, $tab_extension)){
						if(move_uploaded_file($file_tmp_name, $destination)){
							$param=[];
							$param[0]['col']='plaquette';
							$param[0]['val']='assets/img/plaquette/'.formaterNameFile($nom).$id.$file_extension;
							$param[1]['col']='online';
							$param[1]['val']=1;
								
                      		$resultat=$this->updateParamById($action,$param,$id);
							$msg=$this->getSms($resultat);	
						}
					}
				}
			}
		}//fin file
		if(isset($resultat)){
			header("Location:index.php?action=Agence&saction=Detail&id=".$id."&resultat=".$resultat);

		}
	}//fin ssaction
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();
	$ville=$data[0]->getville();
	$pays = $data[0]->getPays();
	$adresse=$data[0]->getAdresse();
	$slogan = $data[0]->getSlogan();
	$description=$data[0]->getDescription();
	$plaquette = $data[0]->getPlaquette();
	$img = $data[0]->getLogo();
	

}