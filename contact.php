<?php
// Connexion à la base de données
$host = "localhost";
$user = "root"; // par défaut
$pass = "";     // mot de passe XAMPP/WAMP
$db = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $stmt = $conn->prepare("INSERT INTO messages (nom, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom, $email, $message);

    if ($stmt->execute()) {
        echo "Message enregistré avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
