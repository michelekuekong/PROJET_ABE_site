<?php
//menu about us

$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='id_entreprise';
$param[1]['val']=1;

$param[2]['col']='id_parent';
$param[2]['val']=0;

$param[3]['col']='id_position';
$param[3]['val']=3;

$data_aboutus=$this->getAllByParam('presentation',$param);

//menu services
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='type';
$param[1]['val']='Service';

$param[3]['col']='id_parent';
$param[3]['val']=0;

$data_service=$this->getAllByParam('prestation',$param);

//logo
$defaut_logo="assets/img/logo.pn";
$logo_bd=$this->getColsByCol('entreprise','logo','site_web','www.abecameroon.com');
$logo= (!empty($logo_bd)) ? trim($logo_bd) : $defaut_logo ;

//$raison social
$raison_sosial_default="MY COMPAGNY";
$raison_sosial=$this->getColsByCol('entreprise','nom','site_web','www.abecameroon.com');
$raison_sosial= (!empty($raison_sosial)) ? trim($raison_sosial) : $raison_sosial_default ;

//siege
$siege_default='DOUALA';
$siege=$this->getColsByCol('entreprise','ville','site_web','www.abecameroon.com');
$siege= (!empty($siege)) ? trim($siege) : $siege_default ;
// id_agence siege
$id_siege=$this->getColsByCol('agence','id','ville',$siege);

//data entreprise
$param=[];
$param[0]['col'] = 'online';
$param[0]['val'] = 1;
$data_entreprise = $this->getAllByparam('entreprise',$param);  
#slogan
$slogan_compagny=$data_entreprise[0]->getDescription();

#siège sociale
$pays_siege=$siege=$data_entreprise[0]->getPays();
$ville_siege=$data_entreprise[0]->getVille();
$tel_siege=$data_entreprise[0]->getTel();
$email_siege=$data_entreprise[0]->getEmail();

// data contact and agence
$param=[];
$param[0]['col'] = 'online';
$param[0]['val'] = 1;
$data_agence = $this->getAllByparam('agence',$param);

//recuperation des métiers dans presentation
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;

$param[1]['col']='id_entreprise';
$param[1]['val']=1;

$param[2]['col']='id_parent';
$param[2]['val']=0;

$param[3]['col']='id_position';
$param[3]['val']=4;

$data_metier=$this->getAllByParam('presentation',$param);

         