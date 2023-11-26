/*
I numeri narcisisti sono quelli in cui la somma delle loro 3 cifre, ciascuna elevata alla terza potenza,
dà lo stesso numero iniziale. Scrivere uno script che verifichi se un dato numero (a tre cifre) è
narcisistico.
MARVERTI DIEGO 4AI 
*/
let num = 153
let cifra1 = Math.trunc((num % 1000) / 100)
let cifra2 = Math.trunc((num % 100) / 10)
let cifra3 = num % 10
let sum = cifra1 ** 3 + cifra2 ** 3 + cifra3 ** 3
document.write("<h1>Esercizio 30</h1>");
document.write("<p>Numero: <b>" + num + "</b></p>");
if (sum == num) {
	document.write("<p><b>" + num + "</b> e` un numero narcisistico</p>");
}else {
	document.write("<p><b>" + num + "</b> non e` un numero narcisistico</p>");

}





