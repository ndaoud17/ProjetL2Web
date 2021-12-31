<?php

// on détruit toutes les variables de notre séssion
session_unset();

//on détruit la séssion
session_destroy();

// On redirige l'utilisateur vers la page connexion.php
header('Location: index.php?action=connexion');
?>