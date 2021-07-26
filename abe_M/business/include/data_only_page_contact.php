<?php
$ssaction = (isset($_GET['ssaction'])) ? $_GET['ssaction'] : NULL;
// Envoi de mail
if(!empty($ssaction) && $ssaction=="send_mail") {
    extract($_POST);

    $response = false;
    $name = htmlspecialchars($name);
    $email = trim(htmlspecialchars($email));
    $phone = trim(htmlspecialchars($phone));
    $subject = htmlspecialchars($subject);
    $message = nl2br($message);
    $phone = "Contact: ".$phone;
    $message = $message."<br/>".$phone;

    $response = $this->send_mail($email, $name, $subject, $message); // renvoie TRUE ou FALSE
    if($response){
        // Vue
        $mail_send=1;
    }else {
        $mail_send=0;
    }
}