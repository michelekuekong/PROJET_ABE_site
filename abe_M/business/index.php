<?php
require_once("core/controllers/Routeur.controller.php");
require_once("core/models/function.php");
   $router = new Routeur();
if(isset($_GET['action'])){
      $router->route($_GET['action']);
}else{
   $router->route("Accueil");
}