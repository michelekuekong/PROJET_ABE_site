<?php 
$param=[];
$param[0]['col']='online';
$param[0]['val']=-1;

$this->updateParamById($action, $param, $id);
header('Location:index.php?action=Planning_formation');