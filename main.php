<?php include 'index.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.php' ?>
        <?php include 'menu.php' ?>
    </div>

    <div class="about_me">

        <h1><?php echo $intro; ?></h1>

        <div class="data">
            <div class="myImg">
                <img src="/img/php1.jpg" height="400" width="400" alt="Image resize">
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php echo $age; ?>
                    лет </p>
                <p> мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowlege">

            <?php include 'knowlege.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?> <br>

            <?php
            $a = 247;
            $b = 530;
            $c = $a + $b;
            echo $c;
            ?> <br>
            <?php
            //echo $d;
            ?>

        </div>

        <div class="article">
            <p class="text">
                I'll tell you a little about myself. I am studying in the 10th grade on the physics and mathematics
                profile. I really like to study these sciences, and I also love computer science and English. In the
                future I want to become a civil aviation pilot. I really love the courses from SkillFactory!)
            </p>
        </div>
    </div>

    <?php include 'footer.php' ?>

</div>

</body>

</html>		    