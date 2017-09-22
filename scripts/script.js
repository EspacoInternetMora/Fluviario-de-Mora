/**
 * Created by Fernando on 26-02-2015.
 */
/*$(function() {
    var pull = $("#pull");
    var menu = $("#menu");
    var fluviarioMenu = $("#fluviarioSubMenu");
    var fluSubMenu = $("#fluviarioSubMenu ul");
    var exposicaoMenu = $("#exposicaoSubMenu");
    var expoSubMenu = $("#exposicaoSubMenu ul");
    var w = $(window).width();

    if(w > 1023)
    {
        ActivaHover(fluviarioMenu, fluSubMenu);
        ActivaHover(exposicaoMenu, expoSubMenu);
    }

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();

        if(!expoSubMenu.is(':hidden'))
            expoSubMenu.slideToggle();

        if(!fluSubMenu.is(':hidden'))
            fluSubMenu.slideToggle();
    });

    $(fluviarioMenu).on('click', function(e){
        e.preventDefault();
        fluSubMenu.slideToggle();

        if(!expoSubMenu.is(':hidden'))
            expoSubMenu.slideToggle();
    });

    $(exposicaoMenu).on('click', function(e){
        e.preventDefault();
        expoSubMenu.slideToggle();

        if(!fluSubMenu.is(':hidden'))
            fluSubMenu.slideToggle();
    });

    $(window).resize(function(){
        w = $(window).width();

        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
            fluSubMenu.removeAttr('style');
            expoSubMenu.removeAttr('style');
        }
        if(w >= 1007)
        {
            ActivaHover(fluviarioMenu, fluSubMenu);
            ActivaHover(exposicaoMenu, expoSubMenu);
        } else if(w < 1007)
        {
            $(fluviarioMenu).unbind('mouseenter mouseleave');
            $(exposicaoMenu).unbind('mouseenter mouseleave');
        }
    });
});*/

$(document).ready(function (){

    $("#Restaurante, #Restaurante_Text").mouseenter(function() {
        MapaExposicaoOver("Restaurante");
    });

    $("#Restaurante, #Restaurante_Text").mouseleave(function() {
        MapaExposicaoOut("Restaurante");
    });

    $("#MonstrosdoRio, #MonstrosdoRio_Text").mouseenter(function() {
        MapaExposicaoOver("MonstrosdoRio");
    });

    $("#MonstrosdoRio, #MonstrosdoRio_Text").mouseleave(function() {
        MapaExposicaoOut("MonstrosdoRio");
    });

    $("#PercursodeUmRio, #PercursodeUmRio_Text").mouseenter(function() {
        MapaExposicaoOver("PercursodeUmRio");
    });

    $("#PercursodeUmRio, #PercursodeUmRio_Text").mouseleave(function() {
        MapaExposicaoOut("PercursodeUmRio");
    });

    $("#SalaSaramugo, #SalaSaramugo_Text").mouseenter(function() {
        MapaExposicaoOver("SalaSaramugo");
    });

    $("#SalaSaramugo, #SalaSaramugo_Text").mouseleave(function() {
        MapaExposicaoOut("SalaSaramugo");
    });

    $("#HabitatsExoticos, #HabitatsExoticos_Text").mouseenter(function() {
        MapaExposicaoOver("HabitatsExoticos");
    });

    $("#HabitatsExoticos, #HabitatsExoticos_Text").mouseleave(function() {
        MapaExposicaoOut("HabitatsExoticos");
    });

    $("#ExposicaoMultimedia, #ExposicaoMultimedia_Text").mouseenter(function() {
        MapaExposicaoOver("ExposicaoMultimedia");
    });

    $("#ExposicaoMultimedia, #ExposicaoMultimedia_Text").mouseleave(function() {
        MapaExposicaoOut("ExposicaoMultimedia");
    });

    $("#Laboratorio, #Laboratorio_Text").mouseenter(function() {
        MapaExposicaoOver("Laboratorio");
    });

    $("#Laboratorio, #Laboratorio_Text").mouseleave(function() {
        MapaExposicaoOut("Laboratorio");
    });

    $("#Auditorio, #Auditorio_Text").mouseenter(function() {
        MapaExposicaoOver("Auditorio");
    });

    $("#Auditorio, #Auditorio_Text").mouseleave(function() {
        MapaExposicaoOut("Auditorio");
    });

    $("#Loja, #Loja_Text").mouseenter(function() {
        MapaExposicaoOver("Loja");
    });

    $("#Loja, #Loja_Text").mouseleave(function() {
        MapaExposicaoOut("Loja");
    });

    $("#Lontrario, #Lontrario_Text").mouseenter(function() {
        MapaExposicaoOver("Lontrario");
    });

    $("#Lontrario, #Lontrario_Text").mouseleave(function() {
        MapaExposicaoOut("Lontrario");
    });

    /*$.get("assets/actividades", function(data) {

        var oficinas = $(data).find('OficinasAmbientais');
        var dadosActividades = $(oficinas).find('dadosActividades');

        $(oficinas).find('actividade').each(function(){
            $("#tituloActividade").html($(this).find('nome').text());
            $("#actvImagem").attr('src', $(this).find('url').text());
            $("#actvDescricao").html($(this).find('descricao').text());
            $("#actvDataPublicoAlvo").html($(this).find('publico').text());

            $("#actvDataDuracao").html($(dadosActividades).find('duracao').text());
            $("#actvDataMinPessoas").html($(dadosActividades).find('min').text() + ' pessoas');
            $("#actvDataPrecoPessoa").html($(dadosActividades).find('preco').text());
            $("#actvDataPrecoPessoa2").html($(dadosActividades).find('preco2').text());
        });

    });*/

});

function MapaExposicaoOver(elemento)
{
    $("#"+elemento).css("fill", "#266ca8");
    $("#"+elemento+"_Text").css("fill", "#ffffff");
}

function MapaExposicaoOut(elemento)
{
    $("#"+elemento).css("fill", "#e2e2e2");
    $("#"+elemento+"_Text").css("fill", "#000000");
}

function ActivaHover(elemento, subElemento)
{
    $(elemento).hover(
        function(){
            /* Verifica se o menu não está aberto */
            if(!subElemento.is(':visible'))
                subElemento.show();
        },
        function(){
            /* Verifica se o menu está aberto */
            if(subElemento.is(':visible'))
                subElemento.hide();
        }
    );
}