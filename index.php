<?php


require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB

$stmt = $pdo->prepare('SELECT * FROM users'); // PREPARE QUERY
$stmt->execute() // EXECUTE QUERY
$res = $stmt->fetchAll(PDO::FETCH_OBJ); // FETCH RESULT OF QUERY


foreach ($res as $key => $user) {
    echo $user->name . " is on db with id : " . $user->id . " <br> ";
}
