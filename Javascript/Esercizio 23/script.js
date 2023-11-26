/*
Stabilire se una persona, in base alla sua età, può votare alle elezioni per la Camera (almeno 18 anni) e per il Senato (almeno 25 anni)
MARVERTI DIEGO 4AI 
*/

let eta = 19;

document.write("<h1>Esercizio 23</h1>");
document.write("<p>Eta: <b>" + eta + "</b></p>");
if(eta > 25) {
	document.write("<p>Puo` votare per il senato e la camera </p>");
}else if (eta > 18){
	document.write("<p>Puo` votare solo per la camera</p>");
} else {
	document.write("<p>Non puo votare</p>");
}