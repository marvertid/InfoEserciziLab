/*
Stabilire se un dato angolo è acuto, ottuso, retto, piatto o giro.MARVERTI DIEGO 4AI 
*/

let ang = 720;

document.write("<h1>Esercizio 25</h1>");
document.write("<p>Angolo 1: <b>" + ang + "°</b></p>");
if(ang % 360 == 0) {
	document.write("<p>L'angolo e` giro</p>");
}else if (ang % 180 == 0|| ang == 0){
	document.write("<p>L'angolo e` piatto</p>");
}else if(ang % 90 == 0) {
	document.write("<p>L'angolo e` retto</p>");
} else if (ang < 90) {
	document.write("<p>L'angolo e` acuto</p>");
} else {
	document.write("<p>L'angolo e` ottuso</p>");
}