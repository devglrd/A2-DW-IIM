<?php


require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB

// JE VOUDRAIS PASSER DANS MON IF MAIS CELA NE MARCHE PAS
if (!empty($_POST)) {
    echo "Je recupere les données de mon formulaire";
    dd($_POST);
}


?>

<form method="POST">
    <label for="">Mon nom</label>
    <input type="text" name="name">
    <button type="submit">Envoyer</button>
</form>
