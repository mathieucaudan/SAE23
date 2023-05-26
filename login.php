<?php
session_start();

// Charger les données des utilisateurs depuis le fichier JSON
$jsonData = file_get_contents('users.json');
$users = json_decode($jsonData, true)['users'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Vérification des identifiants de connexion
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      $_SESSION['role'] = $user['role'];

      // Redirection en fonction du rôle de l'utilisateur
      if ($user['role'] === 'admin') {
        header('Location: admin.php');
      } else {
        header('Location: user.php');
      }
      exit;
    }
  }

  echo 'Identifiants invalides.';
}
?>

