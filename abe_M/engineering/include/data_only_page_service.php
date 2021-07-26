<?php
//le service en question
$param=[];

$param[0]['col']='id';
$param[0]['val']=$id;
$param[1]['col']='online';
$param[1]['val']=1;
$data_one_service=$this->getAllByParam('prestation',$param);
if(empty($data_one_service))header("Location:index.php?action=Page_Error");
#titre du service
$service_title=$data_one_service[0]->getTitre();
$service_description=$data_one_service[0]->getDescription();

$param=[];
$param[0]['col']='id_prestation';
$param[0]['val']=$id;
$param[1]['col']='type';
$param[1]['val']='Ban';
$param[2]['col']='online';
$param[2]['val']=1;
$tab_image=$this->getAllByParam('illustration_prestation',$param);

if(!empty($tab_image)){
echo $image=$tab_image[0]->getLien();
}else{
 $image=null;
}





               
 