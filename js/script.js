
// ----------------------DIVS-ACORDEON-----------------------
//recojer todos las clases acordeon
var accordions = document.getElementsByClassName("accordion");
//recorrerlos y añadirles la clase ('is-open')
for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');
    //cojer el contenido del acordeon (sibling --> hermano)
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      // acordeon abierto --> cerrarlo
      content.style.maxHeight = null;
    } else {
      // acordeon cerrado --> abierto
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }
}
// ------------------------------------HORA-------------------
function fecha(){
    // defer the execution of anonymous function for
    // 3 seconds and go to next line of code.

		var today = new Date();
		var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
		var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		var dateTime = date+' '+time;

		document.getElementById("hora_fecha").innerHTML = dateTime;

    	setTimeout("fecha()",1000);


}

fecha();
