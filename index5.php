<?php


require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB

//UNE ERRREUR SAFFICHE ? POURQUOI ? COMMENT L"ENLEVER

if (!empty($_POST)) {
    $name = $_POST["name"];
    echo "Je recupere les données de mon formulaire";
    $stmt = $pdo->prepare('INSERT INTO users (name) VALUES (:name)'); // PREPARE QUERY
    $stmt->execute(["name" => $name]); // EXECUTE QUERY
    
    $newQuery = $pdo->prepare('SELECT * FROM users WHERE name = ?'); // PREPARE QUERY
    $newQuery->execute([$name]); // EXECUTE QUERY
    $allUsers = $newQuery->fetchAll(PDO::FETCH_OBJ); // FETCH RESULT OF QUERY
}


?>

<form method="POST">
    <label for="">Mon nom</label>
    <input type="text" name="name">
    <button type="submit">Envoyer</button>
</form>

<?php foreach($allUsers as $key=>$value): ?>
    <tr>
        <td>Id : <?php echo $value->id; ?></td>
        <td>Name : <?php echo $value->name; ?></td>
        <br>
    </tr>
<?php endforeach; ?>