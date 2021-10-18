<?php require 'menu.php'; ?>
<head>
    <title>FastochePC11 - Contact</title>
</head>

 
<section class="container">
    <h1>CONTACT</h1>
    
    <!--Texte avant le formulaire-->
    <div class="contact">
    <p>Vous souhaitez me confier votre projet ? </br>En savoir plus sur moi ? </br>N'hésitez pas à m'écrire via le formulaire ci-dessous.</p>
    </div>

    <!--Formulaire de contact-->
    <form method="post" action="envoi.php" class="was-validated">
        <div class="mb-3">
            <label for="validationName" class="form-label">Votre prénom</label>
                <div class="input-group">
                    <input type="text" name="validationName" class="form-control" value="" aria-describedby="Votre prénom" autofocus required> 
                </div>
                
        </div>

        <div class="mb-3">
            <label for="validationInputEmail" class="form-label">Votre adresse de messagerie</label>
            <input type="email" name="validationInputEmail" class="form-control" value="" aria-describedby="Votre Email" required>
        </div>

        <div class="mb-3">
            <label for="validationObject">Choisir l'objet de ma demande</label>
            <select class="form-select"  name="validationObject" aria-label="Default select">
                <option selected>Dépannage informatique</option>
                <option value="initiation">Initiation à l'informatique</option>
                <option value="analyseSauvegarde">Analyse et sauvegarde</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="validationMessage">Votre message</label>
            <textarea class="form-control" name="validationMessage" value="" aria-describedby="Votre message" required></textarea> 
        </div>
  
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="" required>
            <label for="validationTerms" class="form-check-label" for="invalidCheck">Accepte la politique de confidentialité et les mentions légales du site F@stochePC11.com</label>
        </div>

        <button type="submit" name="soumettre" value="OK" class="btn-contact btn-lg">ENVOYER</button>
        
    </form>
</section>

<?php
require 'footer.php'; ?>