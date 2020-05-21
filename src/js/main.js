$(document).ready(function () {
    //references
    var container = $('.cards-container');
    //init
    var source = $('#cards-template').html();
    var template = Handlebars.compile(source);

    // lettura dei dati da php
    $.ajax({
        type: "GET",
        url: "http://localhost/php-ajax-dischi/Partials/scripts/data_json.php",
        success: function (res) {
            console.log(res);
            //lettura dell'intero array
            for(var i=0; i < res.length; i++){
                //assegnazione del n°array
                var context = {
                    url: res[i].poster,
                    title: res[i].title,
                    author: res[i].author,
                    year: res[i].year
                }
                //output finale
                var output = template(context);
                container.append(output);
            }
        },
        error : function () {
            console.error('Errore nella chiamata AJAX');
        }
    });
    
}); // End Doc