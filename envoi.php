<?php

    //Envoi du message
    if (isset($_POST['soumettre'])) {

        //Destinataire et objet du message, déclarations des variables
        $to = "virginie.seat@gmail.com";
        $subject = "Formulaire de contact du site F@stochepc11";

        //Déclarations des variables
        $validationName = "";
        $validationInputEmail = "";
        $validationObject = "";
        $validationMessage = "";
        $validationTerms = "";

        //Gestion des erreurs
        function died($error) {
            echo "Nous sommes vraiment désolés, mais des erreurs ont été trouvées avec le formulaire que vous
            soumis. ";
            echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
            echo $error."<br /><br />";
            echo "Veuillez revenir en arrière et corriger ces erreurs.<br /><br />";
            die();
        }

        //Validation si les données attendues existe
        if(!isset($_POST['validationName']) ||
           !isset($_POST['validationInputEmail']) ||
           !isset($_POST['validationObject']) ||
           !isset($_POST['validationMessage']) ||
           !isset($_POST['validationTerms'])) {
            died('Nous sommes désolés, mais il semble y avoir un problème avec le formulaire que vous
            soumis.');    
           }

        //Récupération des données du formulaire
        $validationName = $_POST["validationName"];
        $validationInputEmail = $_POST["validationInputEmail"];
        $validationObject = $_POST["validationObject"];
        $validationMessage = $_POST["validationMessage"];
        $validationTerms = $_POST['validationTerms'];

        //Déclaration des variables
        $error_message = "";
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";
        //Champ prénom
        if (!preg_match($string_exp, $validationName)) {
            $error_message .= 'Le prénom que vous entré ne semble pas valide.<br />';
        }
        if (strlen($validationName) < 3) {
            $error_message = 'Le prénom est obligatoire, il doit avoir minimum 3 caractères.';
            //La fonction 'trim' supprime les blancs indésirables en début et/ou en fin de chaîne
            $validationName = trim($_POST["validationName"]);
        }
        
        //Champ email
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($email_exp, $validationInputEmail)) {
            $error_message .= 'Votre email doit contenir un @ et un . Example : prenom@examples.com';
            $validationInputEmail = trim($_POST["validationInputEmail"]);
        }

        //Champ message
        if (!preg_match($string_exp, $validationMessage)) {
            $error_message .= 'Votre message ne semble pas valide.';
            $validationMessage = trim($_POST["validationMessage"]);
        //Contrôler que le message ne soit pas vide        
        }elseif ($validationMessage == '') {
            $error_message .= 'Veuillez saisir un message dans la zone de texte.';
        
        //Contrôler la longueur du message
        }if (strlen($validationMessage) > 350) {
            $error_message .=  'votre message ne peut pas dépasser 350 caractères !';
        } 
        
        //Champ accepter les termes
        if ($validationTerms == '') {
            $error_message .= 'Vous devez accepter la politique de confidentialité et les mentions légales du site F@stochePC11.com';
        }
        
        if(strlen($error_message) > 0) {
            died($error_message);
        }

        $email_message = "Réponse du formulaire de contact.\n\n";
        //"Nettoyage des champs
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
          }

        //Texte à envoyer
        $email_message .= "Prénom: ".clean_string($validationName)."\n";
        $email_message .= "Adresse email: ".clean_string($validationInputEmail)."\n";
        $email_message .= "L'objet de ma demande: ".clean_string($validationObject)."\n";
        $email_message .= "Mon message: ".clean_string($validationMessage)."\n";
 
        //En-tête de l'email
        $headers = 'From: '.$validationInputEmail.'\r\n'.
        'Reply-To: '.$validationInputEmail.'\r\n'.
        'X-Mailer: PHP/' . phpversion();
        //Envoi email
        @mail($to, $subject,$email_message, $headers);
        header('Location: contact.php');  
    }
 
?>

