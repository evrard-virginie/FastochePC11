<?php
header("Content-type: text/javascript"); 
require_once("menu.php");
?>
/**Pour valider le formulaire de contact */
(function () {
    'use strict'
  
    // Récupère les données du formulaire et applique les styles de validation de Bootstrap
    var forms = document.querySelectorAll('.needs-validation')
  
    // Boucle sur le formulaire et empêche la soumission si les données ne sont pas rempli correctement
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()