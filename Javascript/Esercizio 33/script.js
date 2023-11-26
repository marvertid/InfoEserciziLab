/*
 Scrivere uno script in grado di ricavare il numero di cifre di un dato intero.
 MARVERTI DIEGO 4AI 
*/
let n = 12;
let num = 0;
document.write("<h1>Esercizio 33</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
for (let i = 0; i < n; i++) {
	if (i % 2 == 0) {
		document.write(" " + num);
	}else {
		document.write(" "+ -num);
	}
	num += 3;
}



