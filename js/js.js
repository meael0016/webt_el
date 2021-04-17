//ancho de la pantaya total
var ancho= window.innerWidth;
(function hola() {
	
	
	var ancho= window.innerWidth;
	console.log(ancho);
	
	
		

	if (ancho <= 981) {
		var despegable=document.getElementById("despegable");
		var menu=document.getElementById("menu");
		menu.style.display="none";
		despegable.style.display="none";
		despegable.style.flexDirection="column";
	}
	

	
	

	$("#nuestros_productos").mouseover(function () {
		if (ancho > 981) {
			$("#despegable").slideDown(30);	
			} 
		});

			$("#nuestros_productos").mouseleave(function() {
				if (ancho > 981) {
				$("#despegable").slideUp(30);
					
				}
			});
			if (ancho > 981) {
				var menu=document.getElementById("menu");
				menu.style.display="flex"
				var despegable=document.getElementById("despegable");
				despegable.style.display="none";
				despegable.style.flexDirection="column";
			}
		

	
		
	
	

	window.onresize =hola;		
	
})();
 $("#quienes_somos,#hola1").click(function(){
	 $("#modal").slideDown(100);	
	 	});
	 
$("#conte1").click(function(){
	$("#modal").slideUp(100);	

	 });

$("#menu1").click(function(){
		 $("#menu").slideDown(100);	

	 });
$("#fa-times").click(function(){
	$("#menu").slideUp(100);	
});
$("#gmail1").click(function() {
	$("#form").slideDown(100);
});

$("#quit1").click(function() {
	$("#form").slideUp(100);
});
function pulso() {
			
		
		if(ancho <= 981){
			$("#despegable").slideToggle(30);
			}
		}


//ancho del despegable





	
 

