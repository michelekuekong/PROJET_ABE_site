<?php
class Illustration_gallery extends General{
   
    public function  __construct($action){

        if(isset($action)){
        
             $saction= (isset($_GET['saction'])) ? $_GET['saction'] : null ;
             $id= (isset($_GET['id'])) ? $_GET['id'] : null ;
             $titre_gallery = $this->getColsByCol('gallery','titre','id',$id);
             //données de toute les pages
             require('include/data_all_page.php');
            // Vue
            require_once($this->getView($action));
        }
    }

}


