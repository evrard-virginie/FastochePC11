/**Pour valider le formulaire de contact */
function formContact()
{
  var name = document.forms['RegForm']['Name'];
  var email = document.forms['RegForm']['Email'];
  var what = document.forms['RegForm']['Object'];
  var message = document.forms['RegForm']['Message'];

  if (name.value == "")
  {
    alert("Le prénom est obligatoire.");
    name.focus();
    return false;
  }

  if (email.value == "")
  {
    alert("L'email est obligatoire.");
    email.focus();
    return false;
  }
  if (email.value.indexOf("@", 0) < 0)
  {
    alert("Le format de l'email est invalide, il doit contenir un '@'");
    email.focus();
    return false;
  }
  if (email.value.indexOf(".", 0) < 0)
  {
    alert("Le format de l'email est invalide, il doit contenir un '.'");
    email.focus();
    return false;
  }

  if (what.selectedIndex < 1)
  {
    alert("Indiquer l'objet de votre message");
    what.focus();
    return false;
  }

  if (message.value == "")
  {
    alert("Veuillez saisir un message dans la zone de texte.");
    message.focus();
    return false;
  }
  return true;
}