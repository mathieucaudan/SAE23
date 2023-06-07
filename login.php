<?php
session_start();

// Charger les données des utilisateurs depuis le fichier JSON
$jsonData = file_get_contents('users.json');
$users = json_decode($jsonData, true)['users'];

if (!empty($_POST['username']) and !empty($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Vérification des identifiants de connexion
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      $_SESSION['role'] = $user['role'];
      header('Location: accueil.php');
      exit;
    }
  }
  header('Location: connexion.php');
  echo '<script>alert("Identifiants invalides.");</script>';

}
?>

