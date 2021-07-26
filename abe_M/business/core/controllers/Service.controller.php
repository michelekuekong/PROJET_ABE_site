<?php
class Service extends General{
   
    public function  __construct($action){

        if(isset($action)){
        	
             
             $saction= (isset($_GET['saction'])) ? $_GET['saction'] : null ;
             $id= (isset($_GET['id'])) ? $_GET['id'] : null ;
          
             //données de toute les pages
             require('include/data_all_page.php');
             //données de la page en cours
             require('include/data_only_page_'.strtolower($action).'.php');
            // Vue
            require_once($this->getView($action));
        }
    }

}


