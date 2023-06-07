<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les valeurs de l'ID et du mot de passe depuis le formulaire
        $id = $_POST['identifiant'];
        $password = $_POST['password'];

        // Charger les données JSON depuis le fichier users.json
        $jsonData = file_get_contents('users.json');

        // Convertir la chaîne JSON en tableau associatif
        $data = json_decode($jsonData, true);

        // Vérifier si l'utilisateur existe dans le tableau
        $users = $data['users'];
        $userIndex = null;
        foreach ($users as $index => $user) {
            if ($user['identifiant'] === $id && $user['password'] === $password) {
                $userIndex = $index;
                break;
            }
        }

        // Si l'utilisateur est trouvé, le supprimer du tableau
        if ($userIndex !== null) {
            unset($users[$userIndex]);

            // Réindexer le tableau
            $data['users'] = array_values($users);

            // Convertir le tableau modifié en chaîne JSON
            $jsonData = json_encode($data, JSON_PRETTY_PRINT);

            // Enregistrer la chaîne JSON dans le fichier users.json
            file_put_contents('users.json', $jsonData);

            echo '<script>alert("Utilisateur supprimé avec succès");</script>';

        } else {
            echo '<script>alert("Identifiant ou mot de passe incorrect");</script>';
        }
    }
    header("Location: parametre.php?success=2"); 
    
    
?>
