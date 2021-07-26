<?php

//lTeam management
$param=[];

$param[0]['col']='online';
$param[0]['val']=1;
$data_team=$this->getAllByParam('management_team',$param);
if(empty($data_team))header("Location:index.php?action=Page_Error");

   