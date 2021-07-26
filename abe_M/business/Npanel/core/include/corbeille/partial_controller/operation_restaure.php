<?php 
$param=[];
$param[0]['col']='online';
$param[0]['val']=0;

$this->updateParamById($ssaction, $param, $id);

header('Location:index.php?action=Corbeille&type='.$ssaction);