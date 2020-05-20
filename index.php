<?php
include __DIR__ . "/Partials/data/data.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/styles/main.css">
</head>

<body>
    <div class="app">
        <header class="container-logo">
            <div class="container">
                <img src="dist\assets\spotify-logo.png" alt="spoty-logo" class="logo">
            </div>
        </header>
        <main>
            <div class="cards-container container flex wrap">
                <?php foreach ($database as $data) { ?>
                    <div class="cards">
                        <img src="<?php echo $data['poster']; ?>" alt="<?php echo $data['title']; ?>">
                        <h3><?php echo $data['title']; ?></h3>
                        <h4><?php echo $data['author']; ?></h4>
                        <h5><?php echo $data['year']; ?></h5>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>