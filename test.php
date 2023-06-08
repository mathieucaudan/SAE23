<?php
function compte() {
    echo "<div class='w3-container w3-black w3-padding-64 w3-xxlarge' id='client'>
        <div class='w3-content'>
            <h1 class='w3-center w3-jumbo' style='margin-bottom:64px'>Client </h1>
            <div class='w3-row w3-center w3-border w3-border-dark-grey'></div>
        </div>
    </div>
    
    <div class='w3-container w3-padding-64 w3-black w3-xlarge'>
        <div class='w3-content'>
            <center>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Identifiant</th>
                    <th>Email</th>
                </tr>";
    
    // Charger le contenu du fichier users.json
    $jsonString = file_get_contents('users.json');

    // Décoder le contenu JSON en tableau associatif
    $data = json_decode($jsonString, true);

    // Récupérer le tableau des utilisateurs
    $users = $data['users'];

    // Parcourir les utilisateurs et afficher les informations pour ceux ayant le rôle "user"
    foreach ($users as $user) {
         if (isset($_SESSION['identifiant'])) {
              if ($_SESSION['identifiant'] == $user['identifiant']) {
            echo "<tr>
                    <td>" . $user['nom'] . "</td>
                    <td>" . $user['prenom'] . "</td>
                    <td>" . $user['identifiant'] . "</td>
                    <td>" . $user['mail'] . "</td>
                  </tr>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les nouvelles informations du compte
        $nouveauEmail = $_POST['email'];
        $nouveauMotDePasse = $_POST['password'];
        $nouvelIdentifiant = $_POST['username'];

        // Effectuer les modifications dans la base de données ou tout autre traitement nécessaire
        // Vérifier quels champs ont été remplis et effectuer les modifications correspondantes

        if (!empty($nouveauEmail)) {
            // Modifier l'adresse e-mail dans la base de données
            // ...
            echo "<p>Adresse e-mail modifiée avec succès.</p>";
        }

        if (!empty($nouveauMotDePasse)) {
            // Modifier le mot de passe dans la base de données
            // ...
            echo "<p>Mot de passe modifié avec succès.</p>";
        }

        if (!empty($nouvelIdentifiant)) {
            // Modifier l'identifiant dans la base de données
            // ...
            echo "<p>Identifiant modifié avec succès.</p>";
        }
    }
    }
}
?>