/*
Stampare i dieci numeri pari successivi a un dato numero n
MARVERTI DIEGO 4AI 
*/
let n = 12
let sum = 0;
document.write("<h1>Esercizio 32</h1>");
document.write("<p>Numero di primi n numeri naturali: <b>" + n + "</b></p>");
for (let i = n + 1; i <= n + 10; i++) {
	if (i % 2 == 0) {
		document.write(" " + i);
	}
}



