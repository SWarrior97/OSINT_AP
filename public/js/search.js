$(document).ready(function () {
    "use strict";


    $.ajax({
        type : 'GET',
        url : '/',
    
    }).done(function(resposta) {
        console.log(resposta);
    
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
    
    }).always(function() {
        console.log("completou");
    });



});