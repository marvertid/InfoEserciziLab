/*
I numeri narcisisti sono quelli in cui la somma delle loro 3 cifre, ciascuna elevata alla terza potenza,
dà lo stesso numero iniziale. Scrivere uno script che verifichi se un dato numero (a tre cifre) è
narcisistico.
MARVERTI DIEGO 4AI 
*/
let n = 12
let sum = 0;
document.write("<h1>Esercizio 31</h1>");
document.write("<p>Numero di primi n numeri naturali: <b>" + n + "</b></p>");
for (let i = 0; i < n; i++) {
	document.write(" " + (i + 1));
	sum += i + 1;
}
document.write("<p>Somma: <b>" + sum + "</b> </p>");



