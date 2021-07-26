<?php

class Mail extends General{

    public function __construct($action) {

        if(isset($_GET['action'])) {
            $saction = null;
            $id = null;
            $action = $_GET['action'];

            if(!empty($action) && $action == "Mail") {
                extract($_POST);

                $response = false;
                $name = htmlspecialchars($name);
                $phone = htmlspecialchars($PHONE);
                $email = trim(htmlspecialchars($email));
                $subject = htmlspecialchars($subject);
                $message = nl2br(htmlspecialchars($message));
                $message = $message.'<br/>Contact: '.$phone;

                $response = $this->send_mail($email, $name, $subject, $message); // renvoie TRUE ou FALSE
                if($response){
                    // Vue
                    require_once($this->getView());
                }else {
                    
                    echo "<script>alert('Echec d'envoi de mail');</script>";
                }
            }
        }
    }

}