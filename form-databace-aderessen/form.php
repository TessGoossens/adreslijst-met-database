<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
    <form action="" method="post">
        <label for="lading">Voornaam</label><br>
        <input type="text" name="voornaam" id="voornaam"><br>
        <label for="lading">Achternaam</label><br>
        <input type="text" name="achternaam" id="achternaam"><br>
        <label for="lading">Adres</label><br>
        <input type="text" name="adres" id="adres"><br>
        <label for="lading">Huisnummer</label><br>
        <input type="text" name="huisnummer" id="huisnummer"><br>
        <label for="lading">Woonplaats</label><br>
        <input type="text" name="woonplaats" id="woonplaats"><br>
        <label for="lading">Postcode</label><br>
        <input type="text" name="postcode" id="postcode"><br>
        <input type="submit" value="Versturen">
    </form>
<?php
    if(isset($_POST["submit"])) {​​​​​
    $voornaam = $_POST['voornaam'];
    echo $voornaam;
    }​​​​​
?> 
<?php
$host = 'localhost';
$dbname = 'garage';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$con = new PDO($connectStr, $username, $password);

$stmt = "SELECT * FROM GARAGE";
$sth = $con->prepare($stmt);
$sth->execute();

while($row = $sth->fetch()) {
    echo $row["id"] ." ". $row["naam"] ." ". $row["adres"] ." ". $row["huisnummer"] ." ". $row["woonplaats"] ." ". $row["postcode"];
    echo "<br>";
}

?>
</body>
</html>