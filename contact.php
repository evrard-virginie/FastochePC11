<?php
require 'menu.php'; ?>

<title>CONTACT</title>
 
<section class="container">
    <h1>CONTACT</h1>
    
    <!--Texte avant le formulaire-->
    <div class="contact">
    <p>Vous souhaitez me confier votre projet ? </br>En savoir plus sur moi ? </br>N'hésitez pas à m'écrire via le formulaire ci-dessous.</p>
    </div>

    <form method="POST" action="envoi.php" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="validationName" class="form-label">Votre prénom</label>
                <div class="input-group has-validation">
                    <input type="text" name="validationName" class="form-control" id="InputPrenom" aria-describedby="Votre prénom" pattern="[A-z] {30}" autofocus required> 
                    <div class="invalid-feedback">Veuillez écrire votre prénom</div> 
                </div>
        </div>

        <div class="mb-3">
            <label for="validationInputEmail" class="form-label">Votre adresse de messagerie</label>
            <input type="email" name="validationInputEmail" class="form-control" id="InputEmail" aria-describedby="Votre Email" required>
                <div class="invalid-feedback">Veuillez écrire votre email</div>   
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
            <textarea class="form-control" name="validationMessage" id="InputMessage" aria-describedby="Votre message" maxlength="350" required></textarea>
            <div class="valid-feedback">Cela semble bon !</div> 
        </div>
  
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Accepte la politique de confidentialité et les mentions légales du site F@stochePC11</label>
                <div class="invalid-feedback">Vous devez accepter avant de soumettre le formulaire.</div>
        </div>
    <button type="submit" class="btn-contact btn-lg">ENVOYER</button>
</form>
</section>

<?php
require 'footer.php'; ?>