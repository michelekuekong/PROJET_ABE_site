<?php 

if($saction=='Img'){
    if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

    if(!empty($ssaction)){
        // suppri,er l'image
        if($ssaction=='del'){
            $link=$this->getColsByCol('illustration_article', 'lien', 'id', $id);
            $file='../panessitV14/'.$link;
            // verifie l'existence du fichier
            if(file_exists($file)){
                if(is_file($file)){ // verifie s'il s'agit d'un fichier
                    unlink($file);
                }
            }
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=-1;
            $this->updateParamById('illustration_article', $param, $id);

            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            }
        }

        // depublier l'image
        if($ssaction=='putOffline'){
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=0;
            $this->updateParamById('illustration_article', $param, $id);
            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$id.'#bloc_file');
            }
        }

        // publier
        if($ssaction=='putOnline'){
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=1;
            $this->updateParamById('illustration_article', $param, $id);
            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            }
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
				$size=400*1024;
				// recherche du nom de l'article
				$nom_article=$this->getColsByCol($action, 'titre', 'id', $_GET['id']);
				// $maxId= $this->GetMaxId('illustration_article')+1;
				// insert image
				if(isset($_FILES['image']) && !empty($_FILES['image'])){
					if($_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
                        $lien = $this->getColsByCol('illustration_article', 'lien', 'id', $id);
                        $file='../panessitV14/'.$lien;
                        
						$file_name = $_FILES['image']['name'];
						$file_tmp_name = $_FILES['image']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$_GET['id'].$file_extension;

                        $tab_extension = array('.png', '.jpg', '.jpeg');
                        

						if(in_array($file_extension, $tab_extension)){
							
							$dim= getimagesize($_FILES['image']["tmp_name"]);
							if($dim[0]==751 && $dim[1]==322 ){
                                // verifie l'existence du fichier
                                if(file_exists($file)){
                                    if(is_file($file)){ // verifie s'il s'agit d'un fichier
                                        unlink($file);
                                    }
                                }
								if(move_uploaded_file($file_tmp_name, $destination)){

									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$id.$file_extension;
									
									$this->updateParamById('illustration_article', $param, $id);

                                    if(isset($_COOKIE['id_img'])){
                                        header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
                                    }
									
								}
                            }
						}
					}
                }
                
				// insert plaquette
				if(isset($_FILES['plaquette']) && !empty($_FILES['plaquette'])){
					if($_FILES['plaquette']['error']==0){

                        $lien = $this->getColsByCol('illustration_article', 'lien', 'id', $_GET['id']);
                        $file='../panessitV14/'.$lien;
                        
						$file_name = $_FILES['plaquette']['name'];
						$file_tmp_name = $_FILES['plaquette']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$_GET['id'].$file_extension;

						$tab_extension = array('.pdf');

						if(in_array($file_extension, $tab_extension)){
                            // verifie l'existence du fichier
                            if(file_exists($file)){
                                if(is_file($file)){ // verifie s'il s'agit d'un fichier
                                    unlink($file);
                                }
                            }
                            if(move_uploaded_file($file_tmp_name, $destination)){
                                $param=[];
                                $param[0]['col']='lien';
                                $param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$id.$file_extension;
                                
                                $this->updateParamById('illustration_article', $param, $id);

                                if(isset($_COOKIE['id_img'])){
                                    header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
                                }
                                
                            }
							
						}
					}
                }
                
                // insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0){
                        
                        $lien = $this->getColsByCol('illustration_article', 'lien', 'id', $_GET['id']);
                        $file='../panessitV14/'.$lien;
                         
						$file_name = $_FILES['video']['name'];
						$file_tmp_name = $_FILES['video']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						// $file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$_GET['id'].$file_extension;

						$tab_extension = array('.mp4', '.MP4');

						if(in_array($file_extension, $tab_extension)){

                            // verifie l'existence du fichier
                            if(file_exists($file)){
                                if(is_file($file)){ // verifie s'il s'agit d'un fichier
                                    unlink($file);
                                }
                            }
                            if(move_uploaded_file($file_tmp_name, $destination)){
                                
                                $param=[];
                                $param[0]['col']='lien';
                                $param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$id.$file_extension;
                                
                                $this->updateParamById('illustration_article', $param, $id);

                                if(isset($_COOKIE['id_img'])){
                                    header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
                                }
                                
                            }
							
						}
					}
				}
			}
        }
    }
}
