<?php
class Accueil extends General{
   

    public function  __construct($action){

        if(isset($action)){

             $saction= (isset($_GET['saction'])) ? $_GET['saction'] : null ;
             $id= (isset($_GET['id'])) ? $_GET['id'] : null ;
             $num_msg=(!empty($_GET['num_msg'])) ? (int)$_GET['num_msg'] : null ;
             //données de toute les pages
             require('include/data_all_page.php');
             //require data_current_page
             require('include/data_only_page_'.strtolower($action).'.php');
             
           
            // Vue
            require_once($this->getView($action));

        }
    }
    public function getMsg($num_msg){
        /* renvoie le message de succes de deman de de devis
        @param $num_msg est le numero qui identifie le méssage
        @return $msg string
        */
        $msg=null;
        //Cas resquet pda
        $msg="Votre <strong> DEMANDE DE DEVIS </strong>  a été envoyée avec succès. Africa Business Engeneering vous contactera d'ici peu<br> Nous vous remercions pour la confiance que vous nous accordez.";

       

        return $msg;


    }

}


