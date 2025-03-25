<?php
session_start();

// Mot de passe admin (à modifier selon toi)
$admin_password = "superpass123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    if ($password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { padding: 10px; width: 100%; margin-bottom: 15px; }
        button { padding: 10px 20px; background: #333; color: white; border: none; }
        .error { color: red; }
    </style>
</head>
<body>
    <form method="post">
        <h2>🔐 Admin Login</h2>
        <?php if (isset($error)): ?><p class="error"><?= $error ?></p><?php endif; ?>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Connexion</button>
    </form>
</body>
</html>
