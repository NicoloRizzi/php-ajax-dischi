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

            <img src="dist\assets\spotify-logo.png" alt="spoty-logo" class="logo">

        </header>

        <main>

            <div class="cards-container">
                <?php foreach ($database as $data) { ?>

                    <div class="card">
                        <img src="<?php echo $data['poster']; ?>" alt="">
                        <h3><?php echo $data['title']; ?></h3>
                        <h4><?php echo $data['author']; ?></h4>
                        <h5><?php echo $data['year']; ?></h5>
                    </div>
                <?php } ?>

            </div>

        </main>
        <!-- TEMPLATE-->
        <script id="entry-template" type="text/x-handlebars-template">
            <div class="entry">
            <h1>{{title}}</h1>
            <div class="body">
            {{body}}
            </div>
        </div>
    </script>

    </div>
    <!-- SCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="dist/scripts/main.js"></script>
</body>

</html>