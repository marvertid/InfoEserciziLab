/*
 Scrivere un programma che, dato un numero n positivo, stampi catenine nella forma:
*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*
con un numero pari a n di "*". Ad esempio:
- per n = 1 il risultato deve essere "*"
- per n = 2 il risultato deve essere "*--*"
- per n = 5 il risultato deve essere "*--*--*--*--*"
 MARVERTI DIEGO 4AI 
*/
let n = 5;
document.write("<h1>Esercizio 38</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
for (let i = 1; i < n; i++) {
	document.write("<b>*--</b>");
}
document.write("<b>*</b>");


