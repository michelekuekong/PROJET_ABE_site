<?php 

if ($saction=='Img') {
	if (!empty($ssaction)){

		if ($ssaction=='Del') {
			# code...
		}

		if ($ssaction=='putOffline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=0;
			$this->updateParamById($action, $param, $id);
			$id_banniere = $this->getColsByCol('illustration_banniere', 'id_banniere', 'id', $id);
			header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere);
		}

		if ($ssaction=='putOnline') {
			$param=[];
			$param[0]['col']='online';
			$param[0]['val']=1;
			$this->updateParamById($action, $param, $id);
			$id_banniere = $this->getColsByCol('illustration_banniere', 'id_banniere', 'id', $id);
			header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere);
		}

		if ($ssaction=='delete') {
			$link = $this->getColsByCol('illustration_banniere', 'lien', 'id', $id);
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
			$this->updateParamById('illustration_banniere', $param, $id);
			$id_banniere = $this->getColsByCol('illustration_banniere', 'id_banniere', 'id', $id);
			header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere);
		}

        // Modifier l'image
        if($ssaction=='update'){
            
          

            if(isset($_FILES)){
				$size=30*1024*1024;
				
				if(!empty($_FILES['image']) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){

                    $lien = $this->getColsByCol('illustration_banniere', 'lien', 'id', $id); 
					$id_banniere = $this->getColsByCol('illustration_banniere', 'id_banniere', 'id', $id);
                    $file='.../assets/img/slide/'.$lien; 
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
					$destination = '../assets/img/slide/'.$id.$file_extension;

					$tab_extension = array('.png', '.jpg', '.jpeg');
					$dim= getimagesize($_FILES['image']["tmp_name"]);

					if(in_array($file_extension, $tab_extension)){
						if($dim[0]==1112 && $dim[1]==741){
						
							if(move_uploaded_file($file_tmp_name, $destination)){
								extract($_POST);
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/slide/'.$id.$file_extension;
								$param[1]['col']='type';
								$param[1]['val']='image';
								$param[2]['col']='online';
								$param[2]['val']=1;

								$resultat=$this->updateParamById('illustration_banniere', $param, $id);
                                header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere.'&resultat='.$resultat);
							}
						} else {
								$resultat=0;
                                header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere.'&resultat='.$resultat);}
					}else {
								$resultat=0;
                                header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere.'&resultat='.$resultat);}
                }
                
                // insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0){
                        
                        $lien = $this->getColsByCol('illustration_banniere', 'lien', 'id', $id);
                        $file='../assets/img/slide/'.$lien;
						$id_banniere = $this->getColsByCol('illustration_banniere', 'id_banniere', 'id', $id);
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
						$destination = '../assets/img/slide/'.$id.$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){
							
								if(move_uploaded_file($file_tmp_name, $destination)){
									extract($_POST);
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='assets/img/slide/'.$id.$file_extension;
									$param[1]['col']='type';
									$param[1]['val']='video';
									$param[2]['col']='online';
									$param[2]['val']=1;
									
									$resultat=$this->updateParamById('illustration_banniere', $param, $id);
                                	header('Location:index.php?action=Banniere&saction=Detail&id='.$id_banniere.'&resultat='.$resultat);
									
								}
							
						}
					}
				}
			}
        }


	}
}
