$(document).ready(function () {
    "use strict";

    $.ajax({
        type : 'GET',
        url : 'https://cors-anywhere.herokuapp.com/http://zap.cvmultimedia.cv/bitchous/?pagina=voipcall',
        dataType: "html",
    
    }).done(function(resposta) {
        console.log(resposta);
    
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
    
    }).always(function() {
        console.log("completou");
    });

});