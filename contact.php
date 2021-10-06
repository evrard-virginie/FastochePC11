<?php
require 'menu.php'; ?>

<title>CONTACT</title>
 
<section class="container">
    <h1>CONTACT</h1>
    <hr />
    <!--Texte avant le formulaire-->
    <div class="contact">
    <p>Vous souhaitez me confier votre projet ? </br>En savoir plus sur moi ? </br>N'hésitez pas à m'écrire via le formulaire ci-dessous.</p>
    </div>

    <form class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="validationName" class="form-label">Votre prénom</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="prenomForm" aria-describedby="Votre prénom"> 
                    <div class="invalid-feedback">Veuillez écrire votre prénom</div> 
                </div>
        </div>

        <div class="mb-3">
            <label for="validationInputEmail" class="form-label">Votre adresse de messagerie</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="Votre Email">
                <div class="invalid-feedback">Veuillez écrire votre email</div>   
        </div>

        <div class="mb-3">
            <label for="validationObject">Choisir l'objet de ma demande</label>
            <select class="form-select" aria-label="Default select">
                <option selected>Dépannage informatique</option>
                <option value="initiation">Initiation à l'informatique</option>
                <option value="analyseSauvegarde">Analyse et sauvegarde</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="validationMessage">Votre message</label>
            <textarea class="form-control" id="InputMessage" aria-describedby="Votre message"></textarea>
            <div class="valid-feedback">Cela semble bon !</div> 
        </div>
  
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Accepter les termes et conditions</label>
                <div class="invalid-feedback">Vous devez accepter avant de soumettre le formulaire.</div>
        </div>
    <button type="submit" class="btn-contact btn-lg">ENVOYER</button>
</form>
</section>

<?php
require 'footer.php'; ?>