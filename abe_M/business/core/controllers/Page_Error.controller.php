<?php
class Page_Error extends General {
   

    public function  __construct($action){

        if(isset($action)){
//données de toute les pages
             require('include/data_all_page.php');
            
           
            // Vue
            require_once($this->getView($action));
        }
    }

    
}