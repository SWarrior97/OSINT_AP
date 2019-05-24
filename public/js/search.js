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
        var splitted = splitedData[1].split("}");

        for (var i = 0; i < splitted.length; i++) {
            var data = splitted[i].split('"');
            var numero = data[3];
            var nome = data[7];
            var ilha = data[11];
            var concelho = data[15];
            console.log("Numero:"+numero+"\n"+
                        "nome:"+nome+"\n"+
                        "ilha:"+ilha+"\n"+
                        "concelho:"+concelho+"\n");

                        $.ajax({
                            type : 'GET',
                            url : '/inserirData/'+numero+'/'+nome+'/'+ilha+'/'+concelho,
                        
                        }).done(function(resposta) {
                            console.log("INSERT");
                        }).fail(function(jqXHR, textStatus ) {
                            //console.log("Request failed: " + textStatus);
                        });

        }
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
        }).fail(function(jqXHR, textStatus ) {
            //console.log("Request failed: " + textStatus);
        });
    }

    
});