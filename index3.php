<?php


require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB


if (!empty($_POST)) {
    $name = $_POST["name"];
    echo "Je recupere les données de mon formulaire";
    echo $name;
    
}


?>

<form method="POST">
    <label for="">Mon nom</label>
    <input type="text" name="name">
    <button type="submit">Envoyer</button>
</form>
