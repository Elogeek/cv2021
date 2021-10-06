//TODO HOME
// Recovery the file dd.


$(document).ready(function () {

    $.ajax({
        url: "asset/js/dd.json",
        method: "GET",
        dataType: "json",
        })

        // Code exécuté si succes
        .done(function(result) {
            // Convertir cette réponse en chaine JSON et insérer cette chaine dans #worddefinition
            let data = JSON.stringify(result);
            $("#wordDefinition").append(data);
        })

        // Code exécuté en cas d'échec
        .fail(function(error) {
            alert("la requête a échoué. infos : " + JSON.stringify(error)) ;
        })

        // Code sera exécuté que la requête soit un succès ou un échec
        .always(function(){
            alert("Requête effectuée");
        });

    // Récupération des li
    $.ajax( {
        url: "asset/js/li.json",
        method: "GET",
        dataType: "json",
        })

        // Code exécuté si succes
        .done(function(response) {
        // convertir en string JSON and insérer dans ul
        })

        // Code exécuté en cas d'échec
        .fail(function(error) {
            alert("la requête a échoué. infos : " + JSON.stringify(error)) ;
        })

        // Code sera exécuté que la requête soit un succès ou un échec
        .always(function(){
            alert("Requête effectuée");
        });

    });


/*  Design footer
let footer = document.querySelector('footer');
footer.style.display = 'none';
 */











