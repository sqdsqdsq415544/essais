<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["age"];
    
    // Vérifier les identifiants
    if ($login === "123" && $password === "123") {
        // Redirection vers la page bob_l'éponge.html
        header("Location: bob_l'éponge.html");
        exit; // Assurez-vous d'appeler exit() après la redirection pour arrêter l'exécution du script
    }
    else {
        // Redirection vers une autre page en cas d'identifiants incorrects
        header("Location: autre_page.html");
        exit;
    }
}
?>
