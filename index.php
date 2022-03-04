<?php include __DIR__ . '/includes/data/discs.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Discs PHP</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="">
        </div>
    </header>

    <main>
        <div class="container">
            <div class="discs-container">
                <?php foreach($discs as $disc) : ?>
                <div class="discs">
                    <img src="<?= $disc['poster']?>" alt="">
                    <h3 class="p-10 text-white"><?= $disc['title']?></h3>
                    <span class="p-10 text-grey"><?= $disc['author']?></span>
                    <span class="p-10 text-grey"><?= $disc['year']?></span>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </main>
    
</body>
</html>