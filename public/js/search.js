$(document).ready(function () {
    "use strict";

    

    var loading = $("#loading");
    loading.show();
    $.ajax({
        type : 'GET',
        url : 'https://cors-anywhere.herokuapp.com/http://zap.cvmultimedia.cv/bitchous/?pagina=voipcall',
        dataType: "html",
    
    }).done(function(resposta) {
        $('#prencher').html(resposta);
        loading.hide();
        $(".se-pre-con").fadeOut("slow");
        var html = document.getElementById("prencher").innerHTML;
        var splitedData = html.split("[");
        //console.log(splitedData[1]);
        //console.log(typeof splitedData[1])
        var jsonData = JSON.parse(splitedData[1]);
        //console.log(jsonData);
        
    
    }).fail(function(jqXHR, textStatus ) {
        //console.log("Request failed: " + textStatus);
    
    });

    if (type == "singular"){
        //pessoas
    }else{
        //empresas
        $.ajax({
            type : 'GET',
            url : 'https://cors-anywhere.herokuapp.com/https://www.paginasamarelas.cv/pt/procurar-resultados?SearchForm%5Bwhat%5D=caixa+economica&SearchForm%5Bwhere%5D=',
            dataType: "html",
        
        }).done(function(resposta) {
            //console.log(resposta);
            //$('#prencher_empresa').html(resposta);
            /*var x = document.getElementsByClassName("listing__name--link jsListingName");
            console.log(x);*/
        }).fail(function(jqXHR, textStatus ) {
            //console.log("Request failed: " + textStatus);
        });
    }

    
});