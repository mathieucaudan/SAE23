<?php
// user.php
session_start();
if ($_SESSION['role'] !== 'user') {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page Utilisateur</title>
</head>
<body>
  <h1>Page Utilisateur</h1>
  <!-- Contenu supplémentaire pour les utilisateurs -->
</body>
</html>