<?php 
if ($saction=='Img') {
    if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }
	if (!empty($ssaction)) {

		if ($ssaction=='Del') {
			# code...
		}

		if ($ssaction=='putOffline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=0;
			$this->updateParamById($action, $param, $id);
			$id_album = $this->getColsByCol('illustration_gallery', 'id_gallery', 'id', $id);
			header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album);
		}

		if ($ssaction=='putOnline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=1;
			$this->updateParamById($action, $param, $id);
			$id_album = $this->getColsByCol('illustration_gallery', 'id_gallery', 'id', $id);
			header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album);
		}

		if ($ssaction=='delete') {
			$link = $this->getColsByCol('illustration_gallery', 'lien', 'id', $id);
			$fichier = '../'.$link;
			//verification de l'existance d'un fichier
			if(file_exists($fichier)){
				if (is_file($fichier)) { // verification de l'authenticite du ficher
					unlink($fichier);
				}

			}
			$param=[];
			$param[0]['col']='online';
			$param[0]['val'] = -1;
			$this->updateParamById($action, $param, $id);
			$id_album = $this->getColsByCol('illustration_gallery', 'id_gallery', 'id', $id);
			header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album);
		}

        // Modifier l'image
        if($ssaction=='update'){
            
            // $param=[];
            // $param[0]['col']='lien';
            // $param[0]['val']=-1;
            // $this->updateParamById('illustration_article', $param, $id);

            // if(isset($_COOKIE['id_img'])){
            //     header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            // }

            if(isset($_FILES)){
				$size=30*1024*1024;
				// recherche du nom de l'article
				// $maxId= $this->GetMaxId('illustration_article')+1;
				// insert image
				if(!empty($_FILES['image']) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){

                    $lien = $this->getColsByCol('illustration_gallery', 'lien', 'id', $id);
					$id_album = $this->getColsByCol('illustration_gallery', 'id_gallery', 'id', $id);
					$titre = $this->getColsByCol('gallery', 'titre', 'id', $id_album);
                    $file='../assets/img/portfolio/'.$lien;
                    // verifie l'existence du fichier
                    if(file_exists($file)){
                        if(is_file($file)){ // verifie s'il s'agit d'un fichier
                            unlink($file);
                        }
                    }
					$file_name = $_FILES['image']['name'];
					$file_tmp_name = $_FILES['image']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../assets/img/portfolio/'.formaterNameFile($titre).$id.$file_extension;

					$tab_extension = array('.png', '.jpg', '.jpeg');
					$dim= getimagesize($_FILES['image']["tmp_name"]);

					if(in_array($file_extension, $tab_extension)){
						if($dim[0]==800 && $dim[1]==600){
							if(move_uploaded_file($file_tmp_name, $destination)){
								extract($_POST);
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/portfolio/'.formaterNameFile($titre).$id.$file_extension;
								$param[1]['col']='type';
								$param[1]['val']='photo';
								$param[2]['col']='detail';
								$param[2]['val']=$detail;
								$param[3]['col']='online';
								$param[3]['val']=1;

								$resultat=$this->updateParamById('illustration_gallery', $param, $id);
                                header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album.'&resultat='.$resultat);
							}
						} else { 
							$resultat=0;
                                header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album.'&resultat='.$resultat);}
					}else { 
							$resultat=0;
                                header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album.'&resultat='.$resultat);}
                }
                
                // insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0){
                        
                        $lien = $this->getColsByCol('illustration_gallery', 'lien', 'id', $id);
                        $file='../assets/img/portfolio/'.$lien;
						$id_album = $this->getColsByCol('illustration_gallery', 'id_gallery', 'id', $id);
						$titre = $this->getColsByCol('gallery', 'titre', 'id', $id_album);
                        // verifie l'existence du fichier
                        if(file_exists($file)){
                            if(is_file($file)){ // verifie s'il s'agit d'un fichier
                                unlink($file);
                            }
                        }
						$file_name = $_FILES['video']['name'];
						$file_tmp_name = $_FILES['video']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						// $file_extension = strtolower($file_extension);
						$destination = '../assets/img/portfolio/'.formaterNameFile($titre).$id.$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){
							
								if(move_uploaded_file($file_tmp_name, $destination)){
									extract($_POST);
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/portfolio/'.formaterNameFile($titre).$id.$file_extension;
									$param[1]['col']='detail';
									$param[1]['val']=$detail;
									$param[2]['col']='type';
									$param[2]['val']='video';
									$param[3]['col']='online';
									$param[3]['val']=1;
									
									$resultat=$this->updateParamById('illustration_gallery', $param, $id);
                                	header('Location:index.php?action=Gallery&saction=Detail&id='.$id_album.'&resultat='.$resultat);
									
								}
							
						}
					}
				}
			}
        }


	}
}
