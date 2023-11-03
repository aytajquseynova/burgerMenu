<?php
include_once("./connect.php");


$name1 = "Chicken burgers";
$price1 = 5;
$desc1 = "Endirimli menu";


$name2 = "nuggets";
$price2 = 15;
$desc2 = "acili";


$sql1 = "INSERT INTO burgeritems (name, price, description) VALUES (:name1, :price1, :desc1)";
$stmt1 = $pdo->prepare($sql1);
$stmt1->bindParam(':name1', $name1);
$stmt1->bindParam(':price1', $price1);
$stmt1->bindParam(':desc1', $desc1);
$stmt1->execute();


$sql2 = "INSERT INTO burgeritems (name, price, description) VALUES ( :name2, :price2, :desc2)";
$stmt2 = $pdo->prepare($sql2);
$stmt2->bindParam(':name2', $name2);
$stmt2->bindParam(':price2', $price2);
$stmt2->bindParam(':desc2', $desc2);
$stmt2->execute();



?>