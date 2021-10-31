<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--meta pour le SEO-->
        <meta name="description" content="F@stochePC11.com, vous avez besoin de réponses sur le dépannage ou la maintenance informatique.
        N'hésitez pas à m'écrire via le formulaire de contact.">
        <meta name="keywords" content="dépannage, sécurité, maintenance, informatique, analyse, sauvegarde, formulaire, contact">
        <meta name="author" content="Sylvie Boulonnois">
        <!--meta pour la visibilité de la page en fonction de la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Titre dans l'onglet de la page-->
        <title>FastochePC11 - Confirmation d'envoi du formulaire de contact</title>

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!--Bootstrap Icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" >
        <!--Javascript-->
        <script type="text/javascript" src="script.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">   
                    <!-- F@stochePC11 renvoi sur la page d'accueil -->
                    <a class="navbar-brand" id="fastocheHome"  href="index.html">F@stochePC11</a>   

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul >
                            <!-- Lien vers la page A propos -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="a_propos.html">A&#768; PROPOS </a>
                            </li>
                            <!-- Lien vers la page contact -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">CONTACT</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <section class="container">
            <h1>Contact</h1>
                <main class="a_propos"> 
                    <p id="messageEnvoiForm">Merci</p>   
                    <p id="messageEnvoiForm">Votre message a été transmis, je vous répondrai dans les meilleurs délais.</p>
                    <img src="images/logo.jpg" alt="Image représentant le logo de l'entreprise FastochePC11.com" id="imgLogo" />
                    <p><a href="index.html" title="Vers la page d'accueil du site FastochePC11" id="lienRetourAccueil">Retour sur la page d'accueil du site FastochePC11.com</a></p>
                <main>  
        </section>
        <footer>
            <a href="https://www.linkedin.com/in/fastochepc11/?originalSubdomain=fr" target="_blank"><i class="bi bi-linkedin"></i></a> 
            <p id="copyright">© 2021 F@stochePC11 | <a href="politique_confidentialite.html" target="_blank">Politique de confidentialité</a> | <a href="mentions_legales.html" target="_blank">Mentions légales</a></p>          
        </footer>
                
        <!--Bootstrap Bundle avec Popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
    
<?php    
    //Traitements pour l'envoi du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Récupération des données du formulaire
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["E-mail"]);
        $object = test_input($_POST["object"]);
        $message = test_input($_POST["message"]);
        $validationTerms = test_input($_POST['validationTerms']);

    }

    //Supprimez les caractères inutiles des données utilisateur avec la fonction trim
    //Supprimez les barres obliques (\) des données utilisateur avec la fonction stripslashes
    //La fonction htmlspecialchars convertit les caractères spéciaux en entités HTML, cela empêche les attaques du type Cross-site Scripting
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Gestion des erreurs
    //$_SERVER["REQUEST_METHOD"] == "POST" permet de vérifier si le formulaire a été soumis
    //Si oui récupérer les valeurs et le valider, si non ignoré la validation et affichez le formulaire vierge
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Destinataire et objet du message, déclarations des variables
        $to = "xxx@xxx.xxx";
        $subject = "Formulaire de contact du site F@stochepc11";

        //Pour l'envoie du formulaire
        $email_message = "Réponse du formulaire de contact.\n\n";

        //Nettoyage des champs
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

        //Texte à envoyer
        $email_message .= "Prénom: ".clean_string($name)."\n";
        $email_message .= "Adresse email: ".clean_string($email)."\n";
        $email_message .= "L'objet de ma demande: ".clean_string($object)."\n";
        $email_message .= "Mon message: ".clean_string($message)."\n";

        //En-tête de l'email
        $headers = 'From: '.$email.'\r\n'.
        'Reply-To: '.$email.'\r\n'.
        'X-Mailer: PHP/' . phpversion();
        //Envoi email
        @mail($to, $subject,$email_message, $headers); 
    }
?>

