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
		// Mise a jour des differents champs
		extract($_POST);
		if(!empty($nom) && isset($nom) ){
			if(empty($this->getColsByCol('agence', 'id', 'nom', $nom ))){

				$param=[];
				$param[0]['col']='nom';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
				$resultat=$this->updateParamById($action, $param, $id);
			}else{
				$resultat=0;
			}
			// message
			$msg=$this->getSms($resultat);
		
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
				$destination = '../dsc/img/marque'.formaterNameFile($nom).$id.$file_extension;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]<=81 && $dim[1]<=80){
						if(move_uploaded_file($file_tmp_name, $destination)){

							$param=[];
							$param[0]['col']='logo';
							$param[0]['val']='img/marque'.formaterNameFile($nom).$id.$file_extension;
							$param[1]['col']='online';
							$param[1]['val']=1;

							$resultat=$this->updateParamById($action,$param,$id);
							$msg=$this->getSms($resultat);
						}
					} else { 
					            $msg='<div class="alert alert-warning alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert">&times;</button>
					                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension maximale requise *800x600* 
					                </div>'; }
				}else { 
			            $msg='<div class="alert alert-warning alert-dismissible">
			                  <button type="button" class="close" data-dismiss="alert">&times;</button>
			                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Non éffectué Extensions du fichier requises *.png *.jpg *.jpeg* Dimension maximale requise *81x80* 
			                </div>'; }
				// return $response;
			}
		}
	}
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom= $data[0]->getNom();
	$img = $data[0]->getLogo();
}