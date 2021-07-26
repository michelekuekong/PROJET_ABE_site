<?php
class Dashboard{
    private $_view;// vue qui affiche

    public function  __construct($action){

        if(isset($action)){
          
           
            // Vue accueil
            require_once($this->getView());
        }
    }
    public function setView(){
 

        $this->_view="core/views/accueil.view.php";
       

    }

    public function getView(){
             $this->setView();
        return $this->_view;
    }


     


}
