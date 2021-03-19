
$("#como").click(function () {
	$("#h1,#h2,#h3").slideToggle();	
});


function reportWindowSize() {
  
  var ancho= window.innerWidth;
  if (ancho  > 800) {
	
	var esto=document.getElementById("h1");
	var esto2=document.getElementById("h2");
	var esto3=document.getElementById("h3");

		esto.style.display="flex";
		esto2.style.display="flex";
		esto3.style.display="flex";

}
	if (ancho  <= 800) {
	
	var esto=document.getElementById("h1");
	var esto2=document.getElementById("h2");
	var esto3=document.getElementById("h3");
		esto.style.display="none";
		esto2.style.display="none";
		esto3.style.display="none";
}
}


window.onresize = reportWindowSize;



	
