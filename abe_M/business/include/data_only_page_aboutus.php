<?php
//le service en question
$param=[];

$param[0]['col']='id';
$param[0]['val']=$id;
$param[1]['col']='online';
$param[1]['val']=1;
$data_one_presentation=$this->getAllByParam('presentation',$param);
if(empty($data_one_presentation))header("Location:index.php?action=Page_Error");
#titre du service
$presentation_title=$data_one_presentation[0]->getRubrique();
$presentation_description=$data_one_presentation[0]->getDescription();
//illustation
#lien image
$param=[];
$param[0]['col'] = 'id_presentation';
$param[0]['val'] =$id;
$param[1]['col'] = 'type';
$param[1]['val'] = "image";
$param[2]['col'] = 'online';
$param[2]['val'] = 1;


$data_illustration_presentation= $this->getAllByParam('illustration_presentation',$param);

if(!empty($data_illustration_presentation)){
	$image_presentation=$data_illustration_presentation[0]->getLien();	
}else{
 	$image_presentation=null;	
}


   