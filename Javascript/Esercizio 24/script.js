/*
Dati tre interi stabilire se possono essere le lunghezze dei lati di un triangolo. In un triangolo, ogni lato è sempre minore della somma degli altri due.
MARVERTI DIEGO 4AI 
*/

let l1 = 19.3, l2 = 4.44, l3 = 5.34;

document.write("<h1>Esercizio 24</h1>");
document.write("<p>Lato 1: <b>" + l1 + "</b></p>");
document.write("<p>Lato 2: <b>" + l2 + "</b></p>");
document.write("<p>Lato 3: <b>" + l3 + "</b></p>");
if(l1 < (l2 + l3) && l2 < (l1 + l3) && l3 < (l1 + l2)) {
	document.write("<p>Le lunghezze possono essere lati di un triangolo </p>");
}else {
	document.write("<p>Le lunghezze non possono essere lati di un triangolo</p>");
}