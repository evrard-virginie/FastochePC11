<?php
    //affichage de l'erreur
    function vers_formulaire($errorMessage) {
        
        $errorMessage = 'Votre message n\'a pas pu être envoyé :( ';
        return htmlentities($errorMessage, ENT_QUOTES, 'UTF-8');    
    }

    function vers_formulaire1($validationName) {
        return htmlentities($validationName, ENT_QUOTES, 'UTF-8');
    }

    function vers_formulaire2($validationInputEmail) {
        return htmlentities($validationInputEmail, ENT_QUOTES, 'UTF-8');
    }

    function vers_formulaire3($validationMessage) {
        return htmlentities($validationMessage, ENT_QUOTES, 'UTF-8');
    }
    //Confirmation et renvoi sur la page d'accueil
    function vers_page($success) {
        $success = 'Merci, votre message a bien été envoyer !';
        return htmlentities($success, ENT_QUOTES, 'UTF-8');

    }


?>