<?php 
if ($saction=='Img') {
	if (!empty($ssaction)) {

		if ($ssaction=='Del') {
			# code...
		}

		if ($ssaction=='putOffline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=0;
			$this->updateParamById($action, $param, $id);
			$id_presentation = $this->getColsByCol('illustration_presentation', 'id_presentation', 'id', $id);
			header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation);
		}

		if ($ssaction=='putOnline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=1;
			$this->updateParamById($action, $param, $id);
			$id_presentation = $this->getColsByCol('illustration_presentation', 'id_presentation', 'id', $id);
			header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation);
		}

		if ($ssaction=='delete') {
			$link = $this->getColsByCol('illustration_presentation', 'lien', 'id', $id);
			$fichier = '../dsc/'.$link;
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
			$id_presentation = $this->getColsByCol('illustration_presentation', 'id_presentation', 'id', $id);
			header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation);
		}// Modifier l'image
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

                    $lien = $this->getColsByCol('illustration_presentation','lien', 'id', $id);
					$id_presentation = $this->getColsByCol('illustration_presentation', 'id_presentation', 'id', $id);
					$rubrique = $this->getColsByCol('Presentation', 'rubrique','id', $id_presentation);
                    $file='../dsc/assets/img/aboutus/'.$lien;
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
					$destination = '../dsc/assets/img/aboutus/'.formaterNameFile($rubrique).$id.$file_extension;

					$tab_extension = array('.png', '.jpg', '.jpeg');
					$dim= getimagesize($_FILES['image']["tmp_name"]);

					if(in_array($file_extension, $tab_extension)){
						if($dim[0]==700 && $dim[1]==500){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/aboutus/'.formaterNameFile($rubrique).$id.$file_extension;
								$param[1]['col']='type';
								$param[1]['val']='image';
								$param[2]['col']='online';
								$param[2]['val']=1;
								$resultat=$this->updateParamById('illustration_Presentation', $param, $id);
                                header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation.'&resultat='.$resultat);
							}
						} else { 
								$resultat=0;
                                header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation.'&resultat='.$resultat);}
					}else { 
								$resultat=0;
                                header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation.'&resultat='.$resultat);}
                }
                
                // insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0){
                        
                        $lien = $this->getColsByCol('illustration_presentation','lien', 'id', $id);
                        $file='../dsc/assets/img/aboutus/'.$lien;
						$id_presentation = $this->getColsByCol('illustration_presentation','id_presentation','id', $id);
						$rubrique = $this->getColsByCol('Presentation','rubrique','id', $id_presentation);
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
						$destination = '../dsc/assets/img/aboutus/'.formaterNameFile($rubrique).$id.$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){
							
								if(move_uploaded_file($file_tmp_name, $destination)){
									extract($_POST);
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/aboutus/'.formaterNameFile($rubrique).$id.$file_extension;
									$param[1]['col']='type';
									$param[1]['val']='video';
									$param[2]['col']='online';
									$param[2]['val']=1;
									
									$resultat=$this->updateParamById('illustration_presentation',$param, $id);
                                	header('Location:index.php?action=Presentation&saction=Detail&id='.$id_presentation.'&resultat='.$resultat);
									
								}
							
						}
					}
				}
			}
        }



	}
}
