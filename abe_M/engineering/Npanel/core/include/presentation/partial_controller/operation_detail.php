<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);
	$rubrique = $data[0]->getRubrique();

	if(isset($_GET['resultat'])){ 

		$resultat = $_GET['resultat'];
		if(empty($resultat)){
            $msg='<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *700x500* 
                </div>';

        }else{
            $msg='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-check" aria-hidden="true"></i> </strong> éffectué avec succès!
                </div>';
        }
        
	 }

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);
		if(isset($rubrique)){
			if(empty($this->getColsByCol('presentation', 'id', 'rubrique', $rubrique ))){
				$param=[];
				$param[0]['col']='rubrique';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($rubrique));
				$resultat=$this->updateParamById($action, $param, $id);
			}else{
				$resultat=0;
			}
			
			$msg=$this->getSms($resultat);
		
		}
		if(isset($id_position)){
			$param=[];
			$param[0]['col']='id_position';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($id_position));
			$resultat=$this->updateParamById($action, $param, $id);
			$msg=$this->getSms($resultat);
		
		}
		if(isset($resume)){
			$param=[];
			$param[0]['col']='resume';
			$param[0]['val']=$resume;
			$resultat=$this->updateParamById($action, $param, $id);
			$msg=$this->getSms($resultat);
		}
		if(isset($description)){
			$param=[];
			$param[0]['col']='description';
			$param[0]['val']=$description;
			$resultat=$this->updateParamById($action, $param, $id);
			$msg=$this->getSms($resultat);
		
		}
		// traitement des fichiers
		if(isset($_FILES)){
			$size=30*1024*1024;
			$maxId= $this->GetMaxId('illustration_presentation')+1;
			// insert image
			if(!empty($_FILES) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../assets/img/aboutus/'.formaterNameFile($rubrique).$maxId.$file_extension;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]==700 && $dim[1]==500){
						if(move_uploaded_file($file_tmp_name, $destination)){

							$param=[];
							$param[0]['col']='lien';
							$param[0]['val']='assets/img/aboutus/'.formaterNameFile($rubrique).$maxId.$file_extension;
							$param[1]['col']='type';
							$param[1]['val']='image';
							$param[2]['col']='id_presentation';
							$param[2]['val']=$id;
							$param[3]['col']='online';
							$param[3]['val']=1;

							$resultat=$this->Add('illustration_presentation', $param); 
							$msg=$this->getSms($resultat);

						}
					} else { 
				            $msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *700x500* 
				                </div>';
				 			}
				}else { 
				            $msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *700x500* 
				                </div>';
				 		}
				// return $response;
			}
			// insert video
			if(isset($_FILES['video']) && !empty($_FILES['video'])){
			$maxId= $this->GetMaxId('illustration_presentation')+1;
				if($_FILES['video']['error']==0){
					$file_name = $_FILES['video']['name'];
					$file_tmp_name = $_FILES['video']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../assets/img/aboutus/'.formaterNameFile($rubrique).$maxId.$file_extension;

					$tab_extension = array('.mp4');

					if(in_array($file_extension, $tab_extension)){

						if($_FILES['video']['size'] < 20480000){

							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/aboutus/'.formaterNameFile($rubrique).$maxId.$file_extension;
								$param[1]['col']='type';
								$param[1]['val']='video';
								$param[2]['col']='id_presentation';
								$param[2]['val']=$id;
								$param[3]['col']='online';
								$param[3]['val']=1;

								$resultat=$this->Add('illustration_presentation', $param); 
								$msg=$this->getSms($resultat);
							}
						}else{$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué, le fichier ne doit pas depasser les *18MB*!!
				                </div>'; }

					}
				}
			}
		}
	}
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $this->getColsByCol('position_presentation', 'nom', 'id', $data[0]->getId_position());
	$resume=$data[0]->getResume();
	$description = $data[0]->getDescription();
	$id_post = $data[0]->getId_position();
	$rubrique = $data[0]->getRubrique();
	$img = $this->getColsByCol('illustration_presentation', 'lien', 'id_presentation', $data[0]->getId());
	$video = $this->getColsByCol('illustration_presentation', 'lien', 'id_presentation', $data[0]->getId());
}	