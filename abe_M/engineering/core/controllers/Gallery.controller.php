<?php
class Gallery extends General{
   
    public function  __construct($action){

        if(isset($action)){
          
             $saction= (isset($_GET['saction'])) ? $_GET['saction'] : null ;
			//données de toute les pages
             require('include/data_all_page.php');
             //require data_current_page
             require('include/data_only_page_'.strtolower($action).'.php');
            // Vue
            require_once($this->getView($action));
        }
    }

}


