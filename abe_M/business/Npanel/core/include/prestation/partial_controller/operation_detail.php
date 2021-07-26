<?php 
if($saction=="Detail"){
	

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);

		// if($ssaction=='update'){
			if(isset($id_type) && !empty($type)){
				$param=[];
				$param[0]['col']='type';
				$param[0]['val']=$id_type;
				$resultat=$this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			
			}
			if(isset($titre)  && !empty($titre)){
				$param=[];
				$param[0]['col']='titre';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($titre));
				
				$reponse=$this->getAllByParam($action, $param);
				if(empty($reponse)){
					$resultat = $this->updateParamById($action, $param, $id);
				}else{
					$resultat = 0;
				}
				// message
				$msg=$this->getSms($resultat);
			
			}
			if(isset($id_parent) && !empty($id_parent)){
				$param=[];
				$param[0]['col']='id_parent';
				$param[0]['val']=(int) $id_parent;
				$resultat=$this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			
			}
			if(isset($description) && !empty($description)){
				$param=[];
				$param[0]['col']='description';
				$param[0]['val']=str_replace("'", "\'", $description);
				$resultat=$this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			if(isset($resume) && !empty($resume)){
				$param=[];
				$param[0]['col']='resume';
				$param[0]['val']=str_replace("'", "\'", $resume);
				$resultat=$this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			if(isset($date_pub) && !empty($date_pub)){
				$param=[];
				$param[0]['col']='date_pub';
				$param[0]['val']=$date_pub;
				$resultat=$this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			// traitement des fichiers
			if(isset($_FILES)){
				$size=7*1024*1024;
				// recherche du nom de l'article
				$nom_prestation=$this->getColsByCol($action, 'titre', 'id', $id);
				$nom_prestation = substr($nom_prestation, 0, 20);
				$type=$this->getColsByCol($action, 'type', 'id', $id);
				$maxId= $this->GetMaxId('illustration_prestation')+1;
				// insert image
				if(isset($_FILES['image']) && !empty($_FILES['image'])){
					if($_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
						$file_name = $_FILES['image']['name'];
						$file_tmp_name = $_FILES['image']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;

						$tab_extension = array('.png', '.jpg', '.jpeg');

						if(in_array($file_extension, $tab_extension)){
							$dim= getimagesize($_FILES['image']["tmp_name"]);
							if($dim[0]==180 && $dim[1]==250 ){
								if(move_uploaded_file($file_tmp_name, $destination)){
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;
									$param[1]['col']='id_prestation';
									$param[1]['val']=(int) $id;
									$param[2]['col']='type';
									$param[2]['val']='image';
									$param[3]['col']='online';
									$param[3]['val']=1;
									
									if(empty($this->getAllByParam('illustration_prestation',$param))){
										$resultat=$this->Add('illustration_prestation', $param); 
										header('Location:index.php?action=Prestation&saction=Detail&id='.$id.'#bloc_file');
									}else {
										$msg='<div class="alert alert-warning alert-dismissible">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
												</div>';
									}
								}
							} else {
								$msg='<div class="alert alert-warning alert-dismissible">
									  <button type="button" class="close" data-dismiss="alert">&times;</button>
									  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *180x250* 
									</div>';
							}
						}else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *180x250* 
				                </div>';
						}
					}
				}
				// insert image banniere
				if(isset($_FILES['img_ban']) && !empty($_FILES['img_ban'])){
					if($_FILES['img_ban']['error']==0 && $_FILES['img_ban']['size'] <= $size){
						$file_name = $_FILES['img_ban']['name'];
						$file_tmp_name = $_FILES['img_ban']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;

						$tab_extension = array('.png', '.jpg', '.jpeg');

						if(in_array($file_extension, $tab_extension)){
							$dim= getimagesize($_FILES['img_ban']["tmp_name"]);
							if($dim[0]==1000 && $dim[1]==300 ){
								if(move_uploaded_file($file_tmp_name, $destination)){
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;
									$param[1]['col']='id_prestation';
									$param[1]['val']=(int)$id;
									$param[2]['col']='type';
									$param[2]['val']='Ban';
									$param[3]['col']='online';
									$param[3]['val']=1;
									
									if(empty($this->getAllByParam('illustration_prestation',$param))){
										$resultat=$this->Add('illustration_prestation', $param); 
										header('Location:index.php?action=Prestation&saction=Detail&id='.$id.'#bloc_file');
									}else {
										$msg='<div class="alert alert-warning alert-dismissible">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
												</div>';
									}
								}
							}else{
								$msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *1000x300* 
					                </div>';
							}
						}else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *1000x300* 
				                </div>';
						}
					}
				}
				// insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0 && $_FILES['video']['size'] <= 20480000){
						$file_name = $_FILES['video']['name'];
						$file_tmp_name = $_FILES['video']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						// $file_extension = strtolower($file_extension);
						$destination = '../assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;
								$param[1]['col']='id_prestation';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='video';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_prestation',$param))){
									$resultat=$this->Add('illustration_prestation', $param); 
									header('Location:index.php?action=Prestation&saction=Detail&id='.$id.'#bloc_file');
								}else {
									$msg='<div class="alert alert-warning alert-dismissible">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
											</div>';
								}
							}
						} else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué, le fichier ne doit pas depasser les *18MB*, extension requise *.mp4!
				                </div>';
						}
					}
				}
				// insert Doc
				if(isset($_FILES['plaquette']) && !empty($_FILES['plaquette'])){
					if($_FILES['plaquette']['error']==0){
						$file_name = $_FILES['plaquette']['name'];
						$file_tmp_name = $_FILES['plaquette']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;

						$tab_extension = array('.pdf');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/services/'.formaterNameFile($nom_prestation).'_'.$maxId.$file_extension;
								$param[1]['col']='id_prestation';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='plaquette';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_prestation',$param))){
									$resultat=$this->Add('illustration_prestation', $param); 
									header('Location:index.php?action=Prestation&saction=Detail&id='.$id.'#bloc_file');
								} else {
									$msg='<div class="alert alert-warning alert-dismissible">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
											</div>';
								}
							}
						} else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.pdf ! 
				                </div>';
						}
					}
				}
			}
		// }
		
	}

	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$data_type = $this->AllData('type_prestation');

	$titre= $data[0]->getTitre();
	$id_parent= $data[0]->getId_parent();
	$resume=$data[0]->getResume();
	$contenu = $data[0]->getDescription();
	$date_pub = $data[0]->getDate_pub();
	$type = $data[0]->getType();
	
	$prest_parent= $this->getColsByCol($action, 'titre', 'id', $id_parent);

	// image d'illustration
	$param=[];
	$param[0]['col']='id_prestation';
	$param[0]['val']=$id;
	$data_illustration=$this->getAllByParam('illustration_prestation', $param);

	// var_dump($data_illustration); exit;

	
}