/*
Dato un numero reale, stabilire se è positivo, negativo o uguale a zero.
MARVERTI DIEGO 4AI 
*/

let num = -123.32;

document.write("<h1>Esercizio 22</h1>");
document.write("<p>Numero: <b>" + num + "</b></p>");
if(num > 0) {
	document.write("<p><b>" + num + "</b> e` positivo </p>");
}else if (num < 0){
	document.write("<p><b>" + num + "</b> e` negativo </p>");
} else {
	document.write("<p><b>" + num + "</b> e` uguale a zero </p>");
}