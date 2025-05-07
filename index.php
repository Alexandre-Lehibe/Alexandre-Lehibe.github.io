<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs sont vides
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
        // Afficher un message d'erreur personnalisé
        echo "Veuillez compléter toutes les cases."; 
    } else {
        // Traitement des données (envoi de l'email, par exemple)
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        $to = "alexlehibe@gmail.com"; // Ton email
        $subject = "Nouveau message de $name";
        $body = "Nom: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message envoyé avec succès!";
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    }
}
?>
