<?php
// Vérifier si le formulaire a été soumis
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'avis depuis le formulaire
    $avis = $_POST['avis'];

    // Adresse e-mail où envoyer l'avis
    $destinataire = "thom.patiss25fc@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouvel avis reçu";

    // Construire le corps de l'e-mail
    $message = "Un nouvel avis a été reçu :\n\n";
    $message .= $avis;

    // En-têtes de l'e-mail
    $headers = "From: avis@votresite.com\r\n";
    $headers .= "Reply-To: avis@votresite.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "Votre avis a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi de l'avis.";
    }
} else {
    // Redirectionner si le formulaire n'a pas été soumis
    header("Location: index.html");
    exit;
}
?>
