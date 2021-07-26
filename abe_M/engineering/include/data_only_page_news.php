<?php
//charge toutes les rubriques
$param=[];
$param[0]['col'] = 'online';
$param[0]['val'] = 1;
$data_article = $this->getAllByParam('article', $param);


//Liste article
if(isset($id) && !empty($id)){
    //theme en cours
    $theme = $this->getColsByCol('theme_blog','titre','id',$id);
    if(empty($theme)){
    	header("Location:index.php?action=Page_Error");
    	exit;
    }
    $param=[];
    $param[0]['col'] = 'id_theme';
    $param[0]['val'] =$id;
    $data_article = $this->getAllByParam('article', $param);
    

}

