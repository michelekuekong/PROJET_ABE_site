<?php
//Banniere
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='id_position';
$param[1]['val']=1;
$data_ban=$this->getAllByParam('banniere',$param);

//About us accueil : coorporate historie
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='id_entreprise';
$param[1]['val']=1;

$param[2]['col']='id_parent';
$param[2]['val']=0;

$param[3]['col']='id_position';
$param[3]['val']=1;

$data_aboutus_accueil_idposition_1=$this->getAllByParam('presentation',$param);

$data_corporate_historie = (!empty($data_aboutus_accueil_idposition_1)) ? $data_aboutus_accueil_idposition_1[0] : null ;
#$description
$description_coorporate_historie=$data_corporate_historie->getResume();
#id_presentation
$id_presentation=$data_corporate_historie->getId();

#lien image
$param=[];
$param[0]['col'] = 'id_presentation';
$param[0]['val'] =$id_presentation;
$param[1]['col'] = 'type';
$param[1]['val'] = "image";
$param[2]['col'] = 'online';
$param[2]['val'] = 1;

$data_illustration_corporate_histories = $this->getAllByParam('illustration_presentation',$param)[0];

$image_coorporate_history=$data_illustration_corporate_histories->getLien();



//recuperation du message si $num_msg est non num
if(!empty($num_msg)){
	$msg=$this->getMsg($num_msg);
}

// Galerie
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='id_entreprise';
$param[1]['val']=1;

$data_gallery=$this->getAllByParam('gallery',$param); 

