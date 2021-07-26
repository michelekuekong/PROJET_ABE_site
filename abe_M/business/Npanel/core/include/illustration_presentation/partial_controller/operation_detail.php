<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);
	$album= $this->getColsByCol('gallery', 'titre', 'id', $data[0]->getId_gallery());
	$detail = $data[0]->getDetail();
	$date_pub = date_format(date_create($data[0]->getDate_pub()), 'd F Y');
	$img = $data[0]->getLien();
	$video = $data[0]->getLien();

	// $param=[];
	// $param[0]['col']='id_gallery';
	// $param[0]['val']=$data[0]->getId();
	// $data_illustration=$this->getAllByParam('illustration_gallery', $param);

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);
		if(isset($detail)){
			$param=[];
			$param[0]['col']='detail';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($detail));
			$this->updateParamById($action, $param, $id);
		}
		if(isset($id_gallery)){
			$param=[];
			$param[0]['col']='id_gallery';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($id_gallery));
			$this->updateParamById($action, $param, $id);		}
		if(isset($date_pub)){
			$param=[];
			$param[0]['col']='date_pub';
			$param[0]['val']=$date_pub;
			$this->updateParamById($action, $param, $id);
		}
		// traitement des fichiers
		if(isset($_FILES)){
			$size=30*1024*1024;
			// insert image
			if(isset($_FILES['image']) && !empty($_FILES['image'])){
				if($_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
					$file_name = $_FILES['image']['name'];
					$file_tmp_name = $_FILES['image']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../projetDSC/dsc0.7/assets/img/portfolio/'.formaterNameFile($file_name);

					$tab_extension = array('.png', '.jpg', '.jpeg');

					if(in_array($file_extension, $tab_extension)){
						// $dim= getimagesize($_FILES['image']["tmp_name"]);
						// if(!($dim[0]==350 && $dim[1]==750) ){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/portfolio/'.formaterNameFile($file_name);
								$param[1]['col']='type';
								$param[1]['val']='Image';
								$param[2]['col']='online';
								$param[2]['val']=1;
								
                      			$ligne=$this->updateParamById($action,$param,$id);
							}
						// }
					}
				}
			}
			// insert video
			if(isset($_FILES['video']) && !empty($_FILES['video'])){
				if($_FILES['video']['error']==0){
					$file_name = $_FILES['video']['name'];
					$file_tmp_name = $_FILES['video']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../projetDSC/dsc0.7/assets/img/portfolio/'.formaterNameFile($file_name);

					$tab_extension = array('.mp4');

					if(in_array($file_extension, $tab_extension)){
						if(move_uploaded_file($file_tmp_name, $destination)){
							$param=[];
							$param[0]['col']='lien';
							$param[0]['val']='assets/img/portfolio/'.formaterNameFile($file_name);
							$param[1]['col']='type';
							$param[1]['val']='video';
							$param[2]['col']='online';
							$param[2]['val']=1;
								
                      			$ligne=$this->updateParamById($action,$param,$id);
						}
					}
				}
			}
			// insert Doc
			if(isset($_FILES['plaquette']) && !empty($_FILES['plaquette'])){
				if($_FILES['plaquette']['error']==0 && $_FILES['plaquette']['size'] <= $size){
					$file_name = $_FILES['plaquette']['name'];
					$file_tmp_name = $_FILES['plaquette']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../panessitV14/img/blog/'.formaterNameFile($file_name);

					$tab_extension = array('.pdf');

					if(in_array($file_extension, $tab_extension)){
						if(move_uploaded_file($file_tmp_name, $destination)){
							$param=[];
							$param[0]['col']='lien';
							$param[0]['val']='img/blog/'.formaterNameFile($file_name);
							$param[1]['col']='id_article';
							$param[1]['val']=(int)$id;
							$param[2]['col']='type';
							$param[2]['val']='Plaquette';
							$param[3]['col']='online';
							$param[3]['val']=1;
							if(empty($this->getAllByParam('illustration_article',$param))){
								$resultat=$this->Add('illustration_article', $param); 
							}
						}
					}
				}
			}
		}
	}
}