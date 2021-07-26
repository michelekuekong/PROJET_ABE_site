<?php
function getStatut($online){
	if($online==1) {
		$resutat='<span class="badge badge-success">Online</span>';

	}elseif($online==0){
	$resutat='<span class="badge badge-warning">Offline</span>';
  }else{
  	$resutat='<span class="badge badge-danger">Supprimé</span>';
  }

	return $resutat;
}

function formaterMsg($resutat,$saction){
   
    if($saction=="PutOffline") $objet="dépublication";
    if($saction=="PutOnline") $objet="publication";
    if($saction=="Del") $objet="suppresion";
    if($saction=="Add") $objet="création";

    if(isset($objet)){


	
			if(empty($resutat)){
				$msg='<div class=" col-12 alert alert-warning alert-dismissible fade show" role="alert">
				  <strong><i class="fas fa-exclamation-triangle"></i></strong> Echec de '.$objet.' !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			}else{
				$msg='<div class=" alert alert-success alert-dismissible fade show" role="alert">
				  <strong><i class="fa fa-check" aria-hidden="true"></i>    </strong>  '.ucfirst($objet).' éffectuée avec succès !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			}
			return $msg;
	  }
}


function Impor_fille($objet,$nom){
  $succes=0;
  // Vérifie si le fichier a été uploadé sans erreur.
  if(isset($_FILES["doc"]) && $_FILES["doc"]["error"] == 0){

    $Tab_list_type=$arrayName = array('xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'pdf'=>'application/pdf');

   $filename = $_FILES["doc"]["name"];
   $filetype = $_FILES["doc"]["type"];
    $filesize = $_FILES["doc"]["size"];
   // echo $_FILES["doc"]["tmp_name"]; exit;

    // Vérifie l'extension du fichier
     $ext = pathinfo($filename, PATHINFO_EXTENSION);
     if(!array_key_exists($ext,  $Tab_list_type)){
       $content_msg="Veuillez sélectionner un format de fichier valide !";
       $succes=0;
     }else{ 


    // Vérifie la taille du fichier - 5Mo maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize){
       $content_msg="La taille du fichier doit etre au maximum 5 Mo !";
       $succees=0;
    }else{///fin    if($filesize > $maxsize){

    // Vérifie le type MIME du fichier
    if(in_array($filetype, $Tab_list_type)){
      // Vérifie si le fichier existe avant de le télécharger.
        if(file_exists("upload/" . $_FILES["doc"]["name"])){
            $content_msg=$_FILES["doc"]["name"] . " existe déjà.";
            $succes=0;
        }else{
          $dim= getimagesize($_FILES["doc"]["tmp_name"]);
          //Avoir le prochain id à créer dans la table Album
   
          $nextId= $objet->NextId();
          //nom fichier
          //$type=explode("/",$filetype)[1];
         $doc=$nom."_version".$nextId.".".$ext; 
          //date de création
          $date=date("Y/m/d H:i:s");
          //importation
          if(move_uploaded_file($_FILES["doc"]["tmp_name"], "archivage/".$ext."/".$doc)){
            $succes=1;
            $content_msg="Votre fichier a été téléchargé avec succès!";
          }else{//if(move_uploaded_file
            $succes=0;
             $content_msg="Erreur de téléchargement de votre fichier !";
          }
        } //if(file_exists("upload/" . $_FILES["doc"]["name"])){
      }else{ // Vérifie le type MIME du fichier
          $content_msg="Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer !";
          $succes=0; 
      }// // Fin Vérifie le type MIME du fichier
    }//fin bomme taille
  }//fin fichier invalide

    }else{
        $content_msg="Error: " . $_FILES["doc"]["error"];
        $succes=0;
    }//fin $_FILES["doc"] exite 

  // Traitelent msg error
      if(isset($content_msg)){
        if($succes==0 ){
              $msg='<div class="alert alert-danger alert-dismissible  show" role="alert">
                                            <button class="btn btn-danger btn-xs"><i class=" fa fa-check"></i></button> <span style="margin-left:10px">'.$content_msg.'</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
        }else{
          $msg='<div class="alert alert-success alert-dismissible  show" role="alert">
                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button> <span style="margin-left:10px"> '.$content_msg.'  </span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
        }//fin erro

      }else{
        $msg="";
      }//Fin traitement msg
   //formatage du retour
  $Tab_result['succes']=$succes;
  $Tab_result['msg']=$msg;
  if($succes==1){
    $Tab_result['lien']="./archivage/".$ext."/".$doc;
    if($ext=="docx")$Tab_result['icone']='<i class="fa fa-file-word-o" aria-hidden="true"></i>';
    if($ext=="pdf")$Tab_result['icone']='<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
    if($ext=="xlsx")$Tab_result['icone']='<i class="fa fa-file-excel-o" aria-hidden="true"></i>';
    $Tab_result['version']=$nextId;

  }else{
     $Tab_result['lien']=null;
     $Tab_result['icone']=null;
     $Tab_result['version']=null;
  }
 

 return $Tab_result;


}
 function extractByPropriete($data,$propriete){
  $Resultat['proprite']=[];
  $Resultat['nbre']=[];
  $index=0;
  $i=1;
  if(!empty($data) && !empty($propriete)){
     foreach ($data as $key => $item) {
            if($propriete=="marque"){
               $nom_propriete=$item->getMarque();
              
            }elseif($propriete=="conditionnement"){
               $nom_propriete=$item->getConditionnement();
            }
            if(!empty($nom_propriete)){
              if(!in_array($nom_propriete, $Resultat['proprite'])){

                $Resultat['proprite'][$index]=$nom_propriete;
                if(!isset($Resultat['nbre'][$index])){
                  $Resultat['nbre'][$index]=1;
                }else{
                  $Resultat['nbre'][$index]++;
                }
                $index++;
             

              }else{
                foreach ($Resultat['proprite'] as $k => $value) {
                        if($Resultat['proprite'][$k]==$nom_propriete){
                          $Resultat['nbre'][$k]++;
                        }
                   }
              }
               
              
               
              
            }
           
     }//Fin foreach
    
    return $Resultat;
  }else{
    return null;
  }
 }

function checkInput($data){
    // netoyage de la valeur recu par id
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
