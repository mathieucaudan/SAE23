<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données saisies par l'utilisateur
    $id = $_POST['id'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Charger les données existantes du fichier users.json
    $jsonData = file_get_contents('users.json');
    $users = json_decode($jsonData, true)['users'];

    // Créer un nouvel utilisateur avec les données saisies
    $newUser = [
        'id' => $id,
        'password' => $password,
        'role' => $role
    ];

    // Ajouter le nouvel utilisateur à la liste des utilisateurs
    $users[] = $newUser;

    // Mettre à jour les données dans le fichier users.json
    $data = ['users' => $users];
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $jsonData);

    echo "Utilisateur ajouté avec succès.";
}
?>
