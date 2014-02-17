<?php
    //obtenemos las variables 
    
    include 'config.php';
    $name     =   $_POST['nombre'];  
    $email    =   $_POST['email'];
    //$subject  =   $_POST['subject'];
    $message  =   $_POST['mensaje'];
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'enviado'; // Mandamos el a través de un petición the ajax diciendo el email que envía...
    }else{
        echo 'Ops! Algo salió mal';// ... cuando falla   
    }
?>
