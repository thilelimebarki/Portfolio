<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecter les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $objet = htmlspecialchars($_POST['objet']);
    
    // Sujet et adresse de destination
    $to = "thilelimebarki63@gmail.com"; // Remplace avec ton adresse email
    $subject = "Nouveau message de votre portfolio";

    // Contenu du message
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    // En-têtes
    $headers = "From: $email";

    // Envoi du mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non valide.";
}
?>
