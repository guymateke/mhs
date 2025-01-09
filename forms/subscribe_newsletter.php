<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer l'email depuis le formulaire
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validation de l'email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Informations de l'email
        $to = "guymateke69@gmail.com"; // Remplacez par l'email du destinataire
        $subject = "Nouvelle inscription à la newsletter";
        $message = "Un nouvel utilisateur s'est abonné à votre newsletter :\n\n";
        $message .= "Email : " . $email . "\n";

        // En-têtes
        $headers = "From: no-reply@votre-site.com\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Envoi de l'email
        if (mail($to, $subject, $message, $headers)) {
            echo "Votre demande d’abonnement a bien été envoyée.";
        } else {
            echo "Erreur : L'email n'a pas pu être envoyé.";
        }
    } else {
        echo "Adresse email invalide.";
    }
}
?>
