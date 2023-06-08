<?php
echo "  
<html>
<head>
  <title>Formulaire de connexion</title>
  <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Amatic+SC'>
  <style>
    body {
      font-family: 'Amatic SC', sans-serif;
      background-color: #f000000;
    }
    
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
    }
    
    .form-group input[type='text'],
    .form-group input[type='password'] {
      width: 100%;
      padding: 7px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group input[type='submit'] {
      width: 100%;
      padding: 10px;
      background-color: #000000;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .form-group input[type='submit']:hover {
      background-color: #000000;
    }
    
    .form-group a {
      display: block;
      text-align: center;
      margin-top: 10px;
      text-decoration: none;
      color: #000;
    }
  </style>
</head>
<body>
  <div class='container'>
    <h2>Connexion</h2>
    <form action='/login.php' method='post'>
      <div class='form-group'>
        <label for='identifiant'>Nom d'utilisateur:</label>
        <input type='text' id='identifiant' name='identifiant' required>
      </div>
      <div class='form-group'>
        <label for='password'>Mot de passe:</label>
        <input type='password' id='password' name='password' required>
      </div>
      <div class='form-group'>
        <input type='submit' value='Se connecter'>
      </div>
    </form>
    <a href='inscription.php'>S'inscrire</a>
  </div>
</body>
</html>";
?>
