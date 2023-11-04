<?php


$host = "localhost";
$user = "root";
$password = "";
$dbName = "burgerorder";


try {
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    // echo "Baglanti yapildi" . "<br>";
} catch (PDOException $e) {
    echo "Baglanti hatasi:" . $e->getMessage();
}
?>