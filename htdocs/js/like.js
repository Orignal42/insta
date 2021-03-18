var nombreClics = 0;
let boutton= document.getElementById("button").addEventListener("click", comptage);
for(i=0;i<boutton;i++){
function comptage() {
  event.target.nombreClics++;

}
 document.getElementById("nombreClics").textContent   = nombreClics;

}


