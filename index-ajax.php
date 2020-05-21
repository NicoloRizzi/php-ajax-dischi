<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio PHP Dischi AJAX</title>
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
            <select name="genres" id="genres">
                <option value="All" selected>All</option>
                <option value="Trap">Trap</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Indie">Indie</option>
                <option value="Rap">Rap</option>
            </select>
            <div class="cards-container container flex wrap"></div>
        </main>
    </div>
    <!-- TEMPLATE-->
    <script id="cards-template" type="text/x-handlebars-template">
        <div class="cards {{ genre }}">
        <img src="{{ url }}" alt="{{ title }}">
        <h3>{{ title }}</h3>
        <h4>{{ author }}</h4>
        <h5>{{ year }}</h5>
        <strong>{{ genre }}</strong>
    </div>
    </script>
    <!-- SCRIPT-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="src/js/main.js"></script>
</body>

</html>