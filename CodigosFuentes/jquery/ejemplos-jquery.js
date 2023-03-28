// Codigo usado en https://norfipc.com/codigos/jquery-ejemplos-practicos-usar-paginas-web.php
//Ocultar bloque

/*$(document).ready(function(){
	
	alert();
	
});*/

$('#c1').click( function(){ 
   
  $('#cont1').hide();
});

//Mostrar bloque
$("#c2").click(function() {
$("#cont1").show("slow");
});

//Ocultar / Mostrar bloque
$("#c1b").click(function() {
$("#cont1").toggle(1500);
},function(){ 
$("#cont1").toggle(1500);
});

//Cambiar tamaño
$("#c3").click(function() {
	$("#cont1").animate({fontSize:'2.4em',width:400,padding:24}, 2500);
});

//Ocultar con FadeOut
$("#c4").click(function() {
$("#cont1").fadeToggle(3000);
});

//Mostrar con FadeIn
$("#c5").click(function() {
$("#cont1").fadeIn(3000);
});
//Mover
$("#c6").click(function(){
	
		$("#cont1").animate({opacity: "0.1", left: "+=400",fontSize:'1em',width: "200"}, 1200)
		.animate({opacity: "0.4", top: "+=160", height: "20", width: "80",fontSize:'0.5em'}, "slow")
		.animate({opacity: "1", left: "0", width: "260"}, "slow")
		.animate({top: "0",width: "260",fontSize:'1.2em'}, "fast")
		.slideUp()
		.slideDown(1800)
		return false;
	
	});
//Cambiar estilo CSS
$("#c7").click(function() {
$("#cont1").css({'border':'4px solid #b7e5ff','color':'#cc3333','font-weight':'bold','background-color':'#ffffff'});
});

//Toca para ocultarme
$("#cont2").click(function() {
$(this).hide().delay(1500).show(1500);
});	 

//Fondo amarillo
$(".yellow").hover(
	function() { $(this).addClass("hover"); },
	function() { $(this).removeClass("hover"); }
);

//Contador de caracteres
$('textarea').keyup(updateCount);
$('textarea').keydown(updateCount);
function updateCount() {
    var cs = $(this).val().length;
    $('#characters').text(cs);
}

//Cargar contenido externo
$("#c8").click(function() {
$("#noticias").load("../facebook/problemas-simbolos.php");
});
//Ocultar
$("#c9").click(function() {
$("#noticias").hide(1500);
});

//GET (Ver codigo fuente)
$("#c10").click(function(){
    $.get('https://norfipc.com/codigos/jquery-ejemplos-practicos-usar-paginas-web.php', function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});

//Version de JQuery
$("#c11").click(function() {
var version=$().jquery;
alert("Estas usando la versión: " +version+" de JQuery");
});

