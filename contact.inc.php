<?php
include ('fonctions.inc.php');
//Initialise les varriables vide pour éviter les messages d'erreurs lors de la première ouverture de la page 
$validationName = '';
$validationInputEmail = '';
$validationMessage = '';
$validationTerms = '';
$erreur = '';

    //Tester comment le formulaire est appelé
    if (isset($_POST['OK'])){
        //Récupération de la valeur saisie dans le formulaire
        $validationName = isset($_POST['validationName']) ?$_POST['validationName'] : '';
        $validationInputEmail = isset($_POST['validationInputEmail']) ?$_POST['validationInputEmail'] : '';
        $validationMessage = isset($_POST['validationMessage']) ?$_POST['validationMessage'] : '';

        //Champ prenom
        if ($_POST['validationName']) {
            //La fonction 'trim' supprime les blancs indésirables en début et/ou en fin de chaîne
            $validationName = trim($_POST["validationName"]);
            //Contrôler les valeurs saisies pour le champ prénom
            if (strlen($validationName) < 3 && '') {
                $erreur = 'Le prénom est obligatoire, il doit avoir minimum 3 caractères.';
            }
        }

        //Champ email
        if (isset($_POST['validationInputEmail'])) {
            $validationInputEmail = trim($_POST["validationInputEmail"]);
            //Validation des caractères utilisé pour email
            if (preg_match(
                '/^[a-z0-9]+([._-]?[a-z0-9]+)*' .                  //début
                '@' .                                               //suite
                '[a-z0-9]+([.-]?[a-z0-9]+)*\.[a-z]{2,5}$/i',        //fin
                $validationInputEmail
            )) {
                $erreur = 'Votre email doit contenir un @ et un . Example : prenom@examples.com';
            }
        }

        //Champ message
        if (isset($_POST['validationMessage'])) {
            $validationMessage = trim($_POST["validationMessage"]);
            //Contrôler les valeurs saisies pour le champ message
            if ($validationMessage == '') {
                $erreur = 'Veuillez saisir un message dans la zone de texte.';
            }
            //Contrôler la longueur du message
            if (strlen($validationMessage) > 350) {
                $erreur =  'votre message ne peut pas dépasser 350 caractères !';
            } 
        }

        //Champ accepter les termes
        if (isset($_POST['$validationTerms'])) {
            $validationTerms = trim($_POST['validationTerms']);
            //Contrôler la valeur saisie
            if ($validationTerms == '') {
                $erreur = 'Vous devez accepter la politique de confidentialité et les mentions légales du site F@stochePC11.com';
            }
        }

        //Redirection
        $message = 'Merci' . $validationName . ' , votre message a bien été envoyer !';
        header('location: index.php');

    }
?>
