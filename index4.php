<?php


require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB



if (!empty($_POST)) {
    $name = $_POST["name"];
    echo "Je recupere les données de mon formulaire";
    $stmt = $pdo->prepare('INSERT INTO users (name) VALUES (:name)'); // PREPARE QUERY
    $stmt->execute(["name" => $name]); // EXECUTE QUERY
    
    $newQuery = $pdo->prepare('SELECT * FROM users WHERE name = ?'); // PREPARE QUERY
    $newQuery->execute(["name" => $name]); // EXECUTE QUERY
    $res = $newQuery->fetchAll(PDO::FETCH_OBJ); // FETCH RESULT OF QUERY
    dd($res);
}


?>

<form method="POST">
    <label for="">Mon nom</label>
    <input type="text" name="name">
    <button type="submit">Envoyer</button>
</form>
