<?php
include_once("./connect.php");
$sql = "SELECT * FROM `menu`";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./assets/css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Wendy+One&display=swap" rel="stylesheet">

<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar__logo"><a href=""><img src="./assets/images/burgerlogo.png"></a></div>
            <div class="navbar__links">
                <ul>
                    <li><a href="index.html">Ana sayfa</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="about.php">Hakkımızda</a></li>
                    <li><a href="">İletişim</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="menu__container">
        <div class="menu__heading">
            <h1>Burgerlerimiz</h1>
        </div>
        <div class="menu__items">
            <?php
            foreach ($menuItems as $item) {
            ?>
                <div class="menu__card">
                    <div class="menu__card__img">
                        <img src="./assets/images/<?= $item['image'] ?>">
                    </div>
                    <div class="card__info">
                        <div class="card__info__heading">
                            <p class="card__heading">
                                <?= $item['name'] ?>
                                <span><?= "R$ ". $item['price'] ?></span>
                            </p>
                        </div>
                        <div class="card__info-txt">
                            <p><?= $item['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            } // Close the "foreach" loop here
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="footer_links">
            <ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>