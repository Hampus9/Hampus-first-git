<?php

include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEFA Football Teams</title>
</head>

<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 40px;
    }

    .team-emblems img {
        max-width: 50%;
        height: auto;
    }

    .team-emblems {
        text-align: center;
        box-shadow: 10px 10px 10px 10px gray;
        background-color: darkgray;
        border-radius: 5%;
    }

    h1 {
        text-align: center;
        font-size: 80px;
    }

    body {
        background-color: lightgrey;

    }
</style>

<body>

    <h1>⚽️ UEFA Footboll Teams ⚽️</h1>

    <div class="grid-container">

        <?php foreach ($teams as $name => $details): ?>
            <div class="team-emblems">
                <h2><?= $name ?></h2>
                <img src="<?= $details["logo"] ?>" alt="logo">
                <h4><?= "Country:" . $details["flag"] ?></h4>
                <p><?= "City:" . $details["city"] ?></p>
                <p><?= "League:" . $details["league"] ?></p>
                <p><?= "UEFA ranking:" . $details["uefa-coefficient-ranking"] ?></p>
                <p><?= "Group:" . $details["group"] ?></p>
                <a href="<?= $details["url"] ?>" target="_blank"><?= $name ?></a>

            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>