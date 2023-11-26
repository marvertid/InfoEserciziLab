/*
 Sia dato un numero naturale non terminante per zero; scrivere un script che ne inverta la posizione
 delle cifre. Es.: 12345 → 54321
 MARVERTI DIEGO 4AI 
*/
let n = 5483593;
document.write("<h1>Esercizio 35</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
do {
	cifra = n % 10;
	n = Math.trunc(n / 10);
	document.write("<b>" + cifra + "</b>");
}while(n > 0);



