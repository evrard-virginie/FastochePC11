<?php

    //Récupération des données du formulaire
    $validationName = $_POST["validationName"];
    $validationInputEmail = $_POST["validationInputEmail"];
    $validationObject = $_POST["validationObject"];
    $validationMessage = $_POST["validationMessage"];

    //Texte à envoyer
    $text = "Prénom : $validationName\n";
    $text = "Adresse email : $validationInputEmail\n";
    $text = "L'objet de ma demande : $validationObject\n";
    $text = "Mon message : $validationMessage\n";
    $text = stripslashes($text);

    //Destinataire et objet du message
    $to = "contact@fastochepc11.com";
    $subject = "Formulaire de contact du site F@stochepc11";

    //En-tête masqué (codage de caractères)
    $headers = "MIME-Version:1.0" . "\r\n";
    $headers = "Content-type: text/plain;
                              charset=utf-8" . "\r\n";
    
    // Expéditeur
    $headers .= 'From: <info@example.com>' . "\r\n";
    
    //Envoi du message, puis confirmation sur la page
    $envoi_valide = mail($to, $subject, $text,$headers);

    if ($envoi_valide) {
        echo "Votre message  a été transmis, je vous répondrai dans les meilleurs délai.";}
    else { echo "Une erreur est survenue, merci de vérifier que les champs soient bien complétés !";}
?>