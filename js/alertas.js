
$(function () {

	if(document.URL.indexOf("#enviado") >= 0){ 
		$("#mensagem-enviada").fadeIn(300);  
	}

	$('.fecha-alerta').click(function(){
	    $(".alerta-topo").hide();  
	    window.location.hash = ":)"; 
	});

	if(document.URL.indexOf("#nao-enviado") >= 0){ 
		$('#botao_contato').addClass("botao-ativo");
        $('#botao_sobre').removeClass("botao-ativo");
        $('#botao_oque-faz').removeClass("botao-ativo");

        $("section#oque-faz").slideUp(800).fadeOut(600); 
        $("section#sobre").slideUp(800).fadeOut(600);  

        $("section#contato").slideDown(800).fadeIn(600); 

        // $("#alertas").load("includes/alertas.html");
        $("#mensagem-nao-enviada").fadeIn(300);  
	}

});