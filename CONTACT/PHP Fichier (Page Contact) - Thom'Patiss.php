<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail où envoyer le message
    $destinataire = "thom.patiss25fc@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Construire le corps de l'e-mail
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n\n";
    $corps_message .= "Message:\n$message";

    // En-têtes de l'e-mail
    $entetes = "From: adresse@example.com\r\n";
    $entetes .= "Reply-To: $email\r\n";
    $entetes .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $entetes)) {
        // Rediriger après l'envoi du message
        header("Location: /index.html");
        exit();
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    // Redirectionner si le formulaire n'a pas été soumis
    header("Location: /index.html");
    exit;
}
?>
