<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données saisies par l'utilisateur
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $role = $_POST['role'];

    // Charger les données existantes du fichier users.json
    $jsonData = file_get_contents('users.json');
    $users = json_decode($jsonData, true)['users'];

    // Créer un nouvel utilisateur avec les données saisies
    $newUser = [
        'identifiant' => $identifiant,
        'password' => $password,
        'role' => $role,
        'nom' => $nom,
        'mail' => $mail,
        'prenom' => $prenom
    ];

    // Ajouter le nouvel utilisateur à la liste des utilisateurs
    $users[] = $newUser;

    // Mettre à jour les données dans le fichier users.json
    $data = ['users' => $users];
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $jsonData);
     header("Location: parametre.php?success=1");
}
?>
