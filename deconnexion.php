<?php
session_start();
session_destroy();
header("Location: accueil.php");
exit();
?>
