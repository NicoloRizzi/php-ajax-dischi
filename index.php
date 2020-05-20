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
    <!--Esercizio di oggi: PHP Dischi Milestone 1
Descrizione
Stampare a schermo una decina di dischi musicali (vedi grafica allegata sotto)
Utilizzare solo PHP per ora e non AJAX.
Stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Utilizzare Html, Sass e PHP
Scegliete pure le immagini che volete utilizzare
Nome repo per consegnare l’esercizio: php-ajax-dischi-->
    <div class="app">

        <header class="container-logo">

            <img src="dist\assets\spotify-logo.png" alt="spoty-logo" class="logo">

        </header>

        <main>

            <div class="cards-container">

                <div class="card">

                    <img src="https://www.mondadoristore.it/img/23-6451-THA-SUPREME/ea019075949602/BL/BL/08/ZOM/?tit=23+6451&aut=THA+SUPREME" alt="">

                    <h3 class="">23 6451</h3>

                    <h4 class="">Tha Supreme</h4>

                    <h5 class="">2020</h5>

                </div>

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