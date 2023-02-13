<?php
if (isset($_POST['submit'])) {
  $to = "linkpehouncamel@gmail.com"; // votre adresse email de destination
  $subject = "Nouveau message depuis le formulaire de contact"; // le sujet de l'email

  // Récupérer les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Préparer le corps du message
  $body = "De : $name\nEmail : $email\nMessage : $message";

  // Envoyer l'email
  mail($to, $subject, $body);

  // Redirection vers la page de confirmation
  header('Location: confirmation.html');
}
?>
