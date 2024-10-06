<body>

    <h1>⚽️ UEFA Footboll Teams ⚽️</h1>

    <a href="about.php"><button>About me</button></a>

    <br><br>

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