<?php
// admin.php
session_start();
if ($_SESSION['role'] !== 'admin') {
  header('Location: user.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page Admin</title>
</head>
<body>
  <h1>Page Admin</h1>
  <!-- Contenu supplémentaire pour les administrateurs -->
</body>
</html>

