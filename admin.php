<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>



<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Si suppression demandée
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM messages WHERE id = $id");
    header("Location: admin.php"); // Redirection pour actualiser
    exit();
}

// Récupère tous les messages
$result = $conn->query("SELECT * FROM messages ORDER BY date_envoi DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Messages Reçus</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f2f2f2; }
        h1 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
        th { background: #333; color: #fff; }
        tr:nth-child(even) { background: #f9f9f9; }
        .btn-delete { color: red; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <h1>📩 Messages Reçus</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nom']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
            <td><?= $row['date_envoi'] ?></td>
            <td><a class="btn-delete" href="admin.php?delete=<?= $row['id'] ?>" onclick="return confirm('Supprimer ce message ?');">Supprimer</a></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <p style="text-align: center; padding-top: 40px; font-size: 25px "><a href="logout.php" style="text-decoration: none; color: black; font-weight: bold;" >🚪 Déconnexion</a></p>

</body>
</html>

<?php
$conn->close();
?>
