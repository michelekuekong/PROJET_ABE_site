<?php

    $id_theme = $this->getColsByCol('article','id_theme','id',$id);
    $theme = $this->getColsByCol('theme_blog','titre','id',$id_theme);
    $param = [];
    $param[0]['col']='online';
    $param[0]['val']=1;
    $param[1]['col']='id';
    $param[1]['val']=$id;
    $data_article=$this->getAllByParam('article',$param);
 
    if(empty($data_article)){
    	header("Location:index.php?action=Page_Error");
    	exit;
    }
    $theme_article=$data_article[0]->getTitre();