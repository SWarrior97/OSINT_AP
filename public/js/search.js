$(document).ready(function () {
    "use strict";

    document.getElementById("mobile-nav-toggle").setAttribute("hidden", true);
    
    document.getElementById("close_modal").addEventListener("click", function(){
      $('#myModal').modal('hide');
    });
    
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
        var table = document.getElementById("myTable");
        table.removeAttribute("hidden");
        var tr = document.createElement('tr');

        var td = document.createElement('td');
        td.innerHTML = "Name";
        tr.appendChild(td);

        var td = document.createElement('td');
        td.innerHTML = "Phone Number";
        tr.appendChild(td);

        var td = document.createElement('td');
        td.innerHTML = "Island";
        tr.appendChild(td);

        var td = document.createElement('td');
        td.innerHTML = "District";
        tr.appendChild(td);

        table.appendChild(tr);

        for (var i = 0; i < splitted.length; i++) {
            var data = splitted[i].split('"');
            var numero = data[3];
            var nome = data[7];
            var ilha = data[11];
            var concelho = data[15];


            if(nome == null || name == null || name ==''){

            }else{
                if(nome.toLowerCase().includes(name.toLowerCase())){
                    var tr = document.createElement('tr');

                    var td = document.createElement('td');
                    var a = document.createElement('a');
                    a.setAttribute('id','url');
                    //a.setAttribute('href', "#");
                    a.innerHTML = nome;
                    a.onclick = function() {
                        myModal
                        $('#myModal').modal('show');
                    };
                    //a.addEventListener("mouseover", func, false);
                    //td.innerHTML = nome;
                    td.appendChild(a);
                    tr.appendChild(td);

                    var td = document.createElement('td');
                    td.innerHTML = numero;
                    tr.appendChild(td);

                    var td = document.createElement('td');
                    td.innerHTML = ilha;
                    tr.appendChild(td);

                    var td = document.createElement('td');
                    td.innerHTML = concelho;
                    tr.appendChild(td);

                    table.appendChild(tr);

                }
            }



            if(phone==numero){
                var tr = document.createElement('tr');

                var td = document.createElement('td');
                td.innerHTML = nome;
                tr.appendChild(td);

                var td = document.createElement('td');
                td.innerHTML = numero;
                tr.appendChild(td);

                var td = document.createElement('td');
                td.innerHTML = ilha;
                tr.appendChild(td);

                var td = document.createElement('td');
                td.innerHTML = concelho;
                tr.appendChild(td);

                table.appendChild(tr);

            }
        }

    }).fail(function(jqXHR, textStatus ) {
        //console.log("Request failed: " + textStatus);
    });

    function func()
    {
        alert("Paginas amarelas \n CVMultimedia");
    }
    
    
    document.onkeydown = function(evt) {
        evt = evt || window.event;
        var isEscape = false;
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc");
        } else {
            isEscape = (evt.keyCode === 27);
        }
        if (isEscape) {
            $('#myModal').modal('hide');
        }
    };

    if(name == null || name ==''){

    }else{
        var str = name.replace(/\s+/g, '+');
        //console.log(str);
        var link = 'https://cors-anywhere.herokuapp.com/https://www.paginasamarelas.cv/pt/procurar-resultados?SearchForm%5Bwhat%5D='+str+'&SearchForm%5Bwhere%5D=';
        $.ajax({
            type : 'GET',
            url : link,

        }).done(function(resposta) {
            var table = document.getElementById("myTable_2");
            table.removeAttribute("hidden");
            //var tr = document.createElement('tr');

            /*var td = document.createElement('td');
            td.innerHTML = "Site";
            tr.appendChild(td);

            var td = document.createElement('td');
            td.innerHTML = "Latitude";
            tr.appendChild(td);

            var td = document.createElement('td');
            td.innerHTML = "Longitude";
            tr.appendChild(td);

            var td = document.createElement('td');
            td.innerHTML = "Phone";
            tr.appendChild(td);

            table.appendChild(tr);*/


            var result = $(resposta).find("#w0");
            var ul = result[0].childNodes[0].childNodes[1].childNodes[1].childNodes[1].childNodes[3].childNodes[1];
            var site = ul.childNodes[1].childNodes[1].href; //Possivel sempre i guess se tiver site

            if(site != null){
                var maintr = document.createElement('tr');

                var td = document.createElement('td');
                td.innerHTML = "Site";


                maintr.appendChild(td);
                table.appendChild(maintr);

                var secondTr = document.createElement('tr');

                var td = document.createElement('td');
                var a = document.createElement('a');
                var completeSite = "www."+site;
                a.setAttribute('href', completeSite);
                a.innerHTML = site;
                td.appendChild(a);

                //td.innerHTML = site;
                secondTr.appendChild(td);
                table.appendChild(secondTr);
            }




            for(var i = 0; i<ul.childNodes.length;i++){
                if(ul.childNodes[i].className != null){
                    if(ul.childNodes[i].className.includes('direction')){
                        var direction = ul.childNodes[i].childNodes[1].href.split('.net')[1];
                        //var splitted = ul.childNodes[i].childNodes[1].href.split('.')[1].split('/');
                        //var newDirection = '/'+splitted[1]+'/'+splitted[2]+'/'+splitted[3]+'/'+splitted[4];
                        //console.log(newDirection);
                        $.ajax({
                            type : 'GET',
                            url : 'https://cors-anywhere.herokuapp.com/https://www.paginasamarelas.cv'+direction,

                        }).done(function(resposta) {
                            //console.log(resposta);
                            var result = $(resposta).find("#getDirectionsForm");
                            var lat = result[0].childNodes[5].childNodes[1].value;
                            var long = result[0].childNodes[7].childNodes[1].value;

                            if(lat != null){
                               // var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.innerHTML = "Latitude";
                                maintr.appendChild(td);
                                //table.appendChild(tr);

                                //var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.innerHTML = lat;
                                secondTr.appendChild(td);
                                //table.appendChild(tr);

                                //longitude
                                //var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.innerHTML = "Latitude";
                                maintr.appendChild(td);
                                //table.appendChild(tr);

                                //var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.innerHTML = long;
                                secondTr.appendChild(td);
                                //table.appendChild(tr);

                                var mapOptions = {"center":new google.maps.LatLng(lat, long),"zoom":16};
                                var container = document.getElementById('gmap0-map-canvas');
                                container.style.width = 'autopx';
                                container.style.height = '450px';
                                var gmap0 = new google.maps.Map(container, mapOptions);
                                var gmarker1 = new google.maps.Marker({"map":gmap0,"position":new google.maps.LatLng(lat, long),"title":name});

                            }
                            //console.log(lat);

                        });
                    }

                    if(ul.childNodes[i].className.includes('phone')){
                        var ulTel =ul.childNodes[i].childNodes[3];
                        for(var j = 0; j<ulTel.childNodes.length;j++){
                            if(ulTel.childNodes[j].className != null){
                                if(ulTel.childNodes[j].childNodes[1].childNodes[2] != null){
                                    //var phones = ulTel.childNodes[j].childNodes[1].childNodes[2];
                                    //console.log(ulTel.childNodes[j].childNodes[1].innerHTML.split(">")[2]);
                                    var phones = ulTel.childNodes[j].childNodes[1].innerHTML.split(">")[2];
                                    var td = document.createElement('td');
                                    td.innerHTML = "Phone";
                                    maintr.appendChild(td);

                                    var td = document.createElement('td');
                                    td.innerHTML = phones;
                                    secondTr.appendChild(td);
                                //table.appendChild(tr);
                                }else{
                                    //console.log(ulTel.childNodes[j].innerHTML.split(">")[2]);
                                    var phones = ulTel.childNodes[j].innerHTML.split(">")[2];
                                    var td = document.createElement('td');
                                    td.innerHTML = "Phone";
                                    maintr.appendChild(td);

                                    var td = document.createElement('td');
                                    td.innerHTML =  phones;
                                    secondTr.appendChild(td);
                                }
                            }
                        }
                    }
                }
            }


        }).fail(function(jqXHR, textStatus ) {
            //console.log("Request failed: " + textStatus);
        });
    }
});
