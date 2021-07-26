<?php 
ABSTRACT class General {
    private $_view;// la partie vu qui  affiche la formation 
    private $_BanniereManager;
    private $_ContactManager;
    private $_CatalogueManager;
    private $_PrestationManager;
    private $_PhotoManager;
    private $_GalleryManager;
    private $_PresentationManager;
    private $_EntrepriseManager;
    private $_ReferenceManager;
    private $_DevisManager; 
    private $_Management_teamManager;
    private $_Corporation_customerManager;
    private $_Illustration_presentationManager;
    private $_Illustration_galleryManager;
    private $_CustomerManager;
    private $_Illustration_articleManager;
    private $_ArticleManager;
    private $_Theme_blogManager;
    private $_Illustration_themeManager;
    private $_Type_prestationManager;
    private $_Illustration_prestationManager;
     private $_Illustration_banniereManager;
   
    protected function setView($action){
            $action= ucfirst(strtolower($action));
            $file_to_include="core/views/".$action.".view.php"; 
            if(file_exists($file_to_include)){
              $this->_view="core/views/".$action.".view.php";   
          }else{
             $this->_view="core/views/Error404.view.php";  
          }   
                       
    }

    protected function getView($action){

             $this->setView($action);
        return $this->_view;
    }


    protected function AllData($action){
     $table=strtolower($action);
     $action=ucfirst(strtolower($table));
     $obj= $action."s";
     $modelManager="_".$action."Manager";
     $classeManager=$action."Manager";
     $this->$modelManager = new $classeManager();
     return $this->$modelManager->getAllData($table,$obj);
    }

  

    protected function getAllByParam($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $obj= $action."s";
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         if(!isset($this->$modelManager))$this->$modelManager = new $classeManager();
         return $this->$modelManager->getAllDataByParam($table,$param,$obj);
    }
      protected function getColsByCol($action,$cols,$col,$val){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getOneColbyOneCol($table,$cols,$col,$val);
    }




    protected function Is_exist($action,$param){
           $exist=0;
           $data= $this->getAllByParam($action,$param);
          // var_dump($data); exit;
           $exist=(empty($data))?0:1;
           return$exist;
    }

    protected function Add($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->AddData($table,$param);
    } 

    //     FONCTION ENVOI MAIL

     public function send_mail($email, $name, $subject, $message){

          require 'PHPMailer/PHPMailerAutoload.php';
          // define('User', 'tankeukelvin@gmail.com');
          // define('Password', 'Kouakepduval49');
          define('User', 'nobiguy@gmail.com');
          define('Password', 'Nobiguy80');
          
          $mail = new PHPMailer;

     // Configuring SMTP server settings
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'tls';                            
          $mail->Port = 587;
     // Authentification
          $mail->Username = User;
          $mail->Password = Password;
     // Expéditeur
          $mail->setFrom($email, ucfirst($name));

     // Destinataire
          $mail->addAddress(User);     // Add a recipient
          $mail->addReplyTo($email);
     // convertir en format html
     $mail->isHTML(true);
                              
     // Objet
          $mail->Subject = $subject; 
     // Votre message
          $mail->Body = $message;
     // Envoi du mail avec gestion des erreurs
         
      try {
          $mail->send();
          return 1;
      } catch (Exception $e) {
           //echo "Mailer Error: " . $mail->ErrorInfo;
        return 0;
      }


         // $mail->SmtpClose();

     }

  public function getSiege_sociale(){
/* Renvoie les data du siege sociale */
  $param[0]['col']='online';
  $param[0]['val']=1;

  $param[1]['col']='siege_sociale';
  $param[1]['val']=1;

  $data_agence=$this->getAllByParam('agence',$param);
  return  (!empty($data_agence)) ? $data_agence[0] : null ;
     
  
}







 

}