<?php 
if($saction=="Detail"){
	
	$data_theme = $this->AllData('theme_blog');

	$id_theme= $this->getColsByCol($action, 'id_theme', 'id', $id);

	$param=[];
	$param[0]['col']='id_article';
	$param[0]['val']=$id;
	$data_illustration=$this->getAllByParam('illustration_article', $param);

	$param=[];
	$param[0]['col']='id_article';
	$param[0]['val']=$id;
	$param[1]['col']='type';
	$param[1]['val']='video';
	$data_video=$this->getAllByParam('illustration_article', $param);

	$param=[];
	$param[0]['col']='id_article';
	$param[0]['val']=$id;
	$param[1]['col']='type';
	$param[1]['val']='plaquette';
	$data_plaquette=$this->getAllByParam('illustration_article', $param);
	
	$theme = $this->getColsByCol('theme_blog', 'titre', 'id', $id_theme);

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);

		if($ssaction=='update'){
			//$titre = str_replace("'", "\'", $titre);
			if(isset($titre)  && !empty($titre)){
				$param=[];
				$param[0]['col']='titre';
				$param[0]['val']=$titre;
				
				$reponse=$this->getAllByParam($action, $param);
				if(empty($reponse)){
					$resultat = $this->updateParamById($action, $param, $id);
				}else{
					$resultat = 0;
				}
				// message
				$msg=$this->getSms($resultat);
			}
				if(isset($id_theme) && !empty($id_theme)){
				$param=[];
				$param[0]['col']='id_theme';
				$param[0]['val']=$id_theme;
				$resultat = $this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			
			}
			if(isset($contenu) && !empty($contenu)){
				$param=[];
				$param[0]['col']='contenu';
				$param[0]['val']=str_replace("'", "\'", $contenu);
				$resultat = $this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			if(isset($resume) && !empty($resume)){
				$param=[];
				$param[0]['col']='resume';
				$param[0]['val']=str_replace("'", "\'", $resume);
				$resultat = $this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			if(isset($auteur) && !empty($auteur)){
				$param=[];
				$param[0]['col']='auteur';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($auteur));
				$resultat = $this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			if(isset($source) && !empty($source)){
				$param=[];
				$param[0]['col']='source';
				$param[0]['val']=htmlspecialchars(trim($source));
				$msg = $this->updateParamById($action, $param, $id);
			}
			if(isset($date_mj) && !empty($date_mj)){
				$param=[];
				$param[0]['col']='date_mj';
				$param[0]['val']=$date_mj;
				$resultat = $this->updateParamById($action, $param, $id);
				$msg=$this->getSms($resultat);
			}
			// traitement des fichiers
			if(isset($_FILES)){
				$size=7*1024*1024;
				// recherche du nom de l'article
				$nom_article=$this->getColsByCol($action, 'titre', 'id', $id);
				$nom_article = substr($nom_article, 0, 20);
				$maxId= $this->GetMaxId('illustration_article')+1;
				// insert image
				if(isset($_FILES['image']) && !empty($_FILES['image'])){
					if($_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
						$file_name = $_FILES['image']['name'];
						$file_tmp_name = $_FILES['image']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.png', '.jpg', '.jpeg');

						if(in_array($file_extension, $tab_extension)){
							$dim= getimagesize($_FILES['image']["tmp_name"]);
							if($dim[0]==800 && $dim[1]==400 ){
								if(move_uploaded_file($file_tmp_name, $destination)){
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
									$param[1]['col']='id_article';
									$param[1]['val']=(int) $id;
									$param[2]['col']='type';
									$param[2]['val']='image';
									$param[3]['col']='online';
									$param[3]['val']=1;
									
									if(empty($this->getAllByParam('illustration_article',$param))){
										$resultat=$this->Add('illustration_article', $param); 
										header('Location:index.php?action=Article&saction=Detail&id='.$id.'#bloc_file');
									} else {
										$msg='<div class="alert alert-warning alert-dismissible">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
												</div>';
									}
								}
							} else{
								$msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *800x400* 
					                </div>';
							}
						} else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *800x400* 
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
						$destination = '../assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
								$param[1]['col']='id_article';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='video';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_article',$param))){
									$resultat=$this->Add('illustration_article', $param); 
									header('Location:index.php?action=Article&saction=Detail&id='.$id.'#bloc_file');
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
						$destination = '../assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.pdf');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
								$param[1]['col']='id_article';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='plaquette';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_article',$param))){
									$resultat=$this->Add('illustration_article', $param); 
									header('Location:index.php?action=Article&saction=Detail&id='.$id.'#bloc_file');
								}else {
									$msg='<div class="alert alert-warning alert-dismissible">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Erreur d\'insertion du fichier!
											</div>';
								}
							}
						}else {
							$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.pdf ! 
				                </div>';
						}
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

	$data_theme = $this->AllData('theme_blog');

	$titre= $data[0]->getTitre();
	$id_theme= $data[0]->getId_theme();
	$resume=$data[0]->getResume();
	$contenu = $data[0]->getContenu();
	$date_mj = $data[0]->getDate_mj();
	$auteur = $data[0]->getAuteur();
	$source = $data[0]->getSource();

	$theme = $this->getColsByCol('theme_blog', 'titre', 'id', $id_theme);

	$param=[];
	$param[0]['col']='id_article';
	$param[0]['val']=$id;
	$data_illustration=$this->getAllByParam('illustration_article', $param);
	
}