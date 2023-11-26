/*
 Sia dato n, un numero intero positivo; scrivere uno script che generi i primi n termini della
 sequenza che ciclicamente propone i tre valori 1, 0, -1. Es. per n = 8: MARVERTI DIEGO 4AI 
*/
let n = 8;
document.write("<h1>Esercizio 40</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
for (i = 0; i < n; i++) {
	switch(i % 3) {
		case 0:
			document.write("<b> 1 </b>");
			break;
		case 1:
			document.write("<b> 0 </b>");
			break;
		case 2:
			document.write("<b> -1 </b>");
	}
}
