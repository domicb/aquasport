
            $(document).ready(function () {
                $("#temp").toggle();
                $("#top").click(function () {
                    var posicion = $("#aqui").offset().top;
                    $("html, body").animate({scrollTop: posicion});
                });
                $("#btngaleria").click(function () {
                    var pos = $("#galeria").offset().top;
                    $("html, body").animate({scrollTop: pos});
                });
                $("#btnsecciones").click(function () {
                    var posi = $("#secciones").offset().top;
                    $("html, body").animate({scrollTop: posi});
                });
                $("#btneltiempo").click(function () {
                    var posi = $("#eltiempo").offset().top;
                    $("html, body").animate({scrollTop: posi});
                });
                $(".tiem").click(function () {
                    var posi = $("#eltiempo").offset().top;
                    $("html, body").animate({scrollTop: posi});
                });
                $("#btnabout").click(function () {
                    var posi = $("#about").offset().top;
                    $("html, body").animate({scrollTop: posi});
                });
                $("#btnsabermas").click(function () {
                    var posi = $("#sabermas").offset().top;
                    $("html, body").animate({scrollTop: posi});
                });
                 $("#subir").click(function () {
                    $('body,html').animate({scrollTop: 0}, 500);
                });
                $("#btnlogo").click(function () {
                    $('body,html').animate({scrollTop: 0}, 500);
                });
                $("#temp2").mouseenter(function(){
                    $("#temp").show();
                });
                $("#temp2").click(function(){
                    $("#temp").hide();
                });
    
            });
