<?php
session_start();
class Routeur{
    public $ctrl;

    public function route(){
        // Chargement automatique des models
        spl_autoload_register(function($class){
            $file_model="core/models/".$class.".model.php";
            if(file_exists($file_model))require_once("core/models/".$class.".model.php");
            require_once("core/controllers/General.controller.php");
        });

        try {
            
            if(!empty($_GET['action'])){
                 $action=ucfirst($_GET['action']);
                //test si un session est créée
                    if(1==1){

                       
                       $FileController="core/controllers/".$action.".controller.php";
                        if(file_exists($FileController)){
                  
                         //Chargement de fille
                        require_once($FileController);
                        //Intencification du controller
                        $controller= new $action($action);

                    }else{
                    //Si controller n'hesite pas allez à page en cours
                    require_once("core/controllers/Page_Error.controller.php");
                    $controller= new Page_Error("Page_Error");
                }

                 }else{//Si pas connecté

                         // charger le controleur de gestion des connection
                         //retour à l'accueil
                    require_once("core/controllers/Connexion.controller.php");
                    $controller= new Connexion($action);

                }//if(isset($_SESSION['connecte']) && $_SESSION['connecte']==1){
               

            
            
            }else{

              
                     require_once("core/controllers/Accueil.controller.php");
                    $controller= new Accueil('Accueil');
              
            }

        } catch (Exception $e) {
            //Gestion de l'exception
        }

    }
}