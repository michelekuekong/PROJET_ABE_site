<?php
class Gallery extends General{
   
    public function  __construct($action){

        if(isset($action)){
              header("Location:index.php");
             $saction= (isset($_GET['saction'])) ? $_GET['saction'] : null ;
             //données de toute les pages
             require('include/data_all_page.php');
            // Vue
            require_once($this->getView($action));
        }
    }

}


