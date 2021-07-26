<?php 
if($saction=="Detail"){

	if(isset($_GET['resultat'])){ 

		$resultat = $_GET['resultat'];
		if(empty($resultat)){
            $msg='<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *1112x741* 
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

	if(!empty($ssaction)){
		$resultat=0;
		// Mise a jour des differents champs
		extract($_POST);
		
		if(isset($texte1)){
			$param=[];
			$param[0]['col']='texte1';
			$param[0]['val']=$texte1;
			$resultat=$this->updateParamById($action, $param, $id);
				
		}
		if(isset($texte2)){
			$param=[];
			$param[0]['col']='texte2';
			$param[0]['val']=$texte2;
			$resultat=$this->updateParamById($action, $param, $id);
				
		}
		if(isset($texte3)){
			$param=[];
			$param[0]['col']='texte3';
			$param[0]['val']=$texte3;
			$resultat=$this->updateParamById($action, $param, $id);
				
		}
	
		// traitement des fichiers
		if(isset($_FILES)){ 
			$size=30*1024*1024;
			$maxId= $this->GetMaxId('illustration_banniere')+1;
			// insert image
			if(!empty($_FILES['image']) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../assets/img/slide/'.$maxId.$file_extension;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]==1112 && $dim[1]==741){
						if(move_uploaded_file($file_tmp_name, $destination)){

							$param=[];
							$param[0]['col']='lien';
							$param[0]['val']='assets/img/slide/'.$maxId.$file_extension;
							$param[1]['col']='type';
							$param[1]['val']='image';
							$param[2]['col']='id_banniere';
							$param[2]['val']=$id;
							$param[3]['col']='online';
							$param[3]['val']=1;

							$resultat=$this->Add('illustration_banniere', $param); 
							
						}
					} else { 
					            $msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension requise *1112x741* 
					                </div>';}
				}else { 
				            $msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension maximale *1112x741* 
				                </div>'; }
				// return $response;
			}
			// insert video
			if(isset($_FILES['video']) && !empty($_FILES['video'])){
				if($_FILES['video']['error']==0){
					$file_name = $_FILES['video']['name'];
					$file_tmp_name = $_FILES['video']['tmp_name'];
					$file_extension = strrchr($file_name, '.');
					$file_extension = strtolower($file_extension);
					$destination = '../assets/img/slide/'.$maxId.$file_extension;

					$tab_extension = array('.mp4');

					if(in_array($file_extension, $tab_extension)){

						if($_FILES['video']['size'] < 20480000){
							if(move_uploaded_file($file_tmp_name, $destination)){

								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='assets/img/slide/'.$maxId.$file_extension;
								$param[1]['col']='type';
								$param[1]['val']='video';
								$param[2]['col']='id_banniere';
								$param[2]['val']=$id;
								$param[3]['col']='online';
								$param[3]['val']=1;

								$resultat=$this->Add('illustration_banniere', $param); 
								
							}
						}else{$msg='<div class="alert alert-warning alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert">&times;</button>
				                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué, le fichier ne doit pas depasser les *18MB*!!
				                </div>'; }
					}
				}
			}
		}//fin fille
	header("Location:index.php?action=Banniere&&saction=Detail&id=".$id."&resultat=".$resultat);
    exit;
	}//Fin ssaction
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	
	$texte1 = $data[0]->getTexte1();
	$texte2 = $data[0]->getTexte2();
	$texte3 = $data[0]->getTexte3();
	$id_post = $data[0]->getId_position();
	$date_pub = date_format(date_create($data[0]->getDate_pub()), 'd F Y');
	$img = $this->getColsByCol('illustration_banniere', 'lien', 'id_banniere', $id);
	$video = $this->getColsByCol('illustration_banniere', 'lien', 'id_banniere', $id);
	$nom= $this->getColsByCol('position_banniere', 'nom', 'id', $id_post);
	if(isset($resultat))$msg=$this->getSms($resultat);
}	