<?php
include ('contact.inc.php');

    //Envoi du message
    if (isset($_POST['OK'])) {
        //Récupération des données du formulaire
        $validationName = $_POST["validationName"];
        $validationInputEmail = $_POST["validationInputEmail"];
        $validationObject = $_POST["validationObject"];
        $validationMessage = $_POST["validationMessage"];

        //Texte à envoyer
        $name = "Prénom : $validationName\n";
        $email = "Adresse email : $validationInputEmail\n";
        $object = "L'objet de ma demande : $validationObject\n";
        $text = "Mon message : $validationMessage\n";
        $text = stripslashes($text);

        //Destinataire et objet du message
        $to = "virginie.seat@gmail.com";
        $subject = "Formulaire de contact du site F@stochepc11";

        //En-tête masqué (codage de caractères), pour envoyer un email HTML
        $headers[] = 'MIME-Version:1.0';
        $headers[] = 'Content-type: text/plain; charset=utf-8';  

        //En-tête additionnel
        $headers[] = 'From: ' . $name . ' <' . $email . ' >\r\n';

        //Envoi email
        $success = mail($to, $subject, $object, $text, implode("\r\n", $headers));
        
    }
 
?>

