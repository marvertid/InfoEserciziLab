/*
 Sia dato n, un numero intero positivo; costruire una breve applicazione che generi in sequenza i
 nomi di n mesi dell’anno. Es. (n = 14)
 MARVERTI DIEGO 4AI 
*/
let mesi = 14;
document.write("<h1>Esercizio 36</h1>");
document.write("<p>Numero: <b>" + mesi + "</b></p>");
for (let i = 0; i < mesi; i++) {
	switch (i % 12) {
		case 0:
			document.write("<p>Gennaio</p>");
			break;
		case 1:
			document.write("<p>Febbraio</p>");
			break;
		case 2:
			document.write("<p>Marzo</p>");
			break;
		case 3:
			document.write("<p>Aprile</p>");
			break;
		case 4:
			document.write("<p>Maggio</p>");
			break;
		case 5:
			document.write("<p>Giugno</p>");
			break;
		case 6:
			document.write("<p>Luglio</p>");
			break;
		case 7:
			document.write("<p>Agosto</p>");
			break;
		case 8:
			document.write("<p>Settembre</p>");
			break;
		case 9:
			document.write("<p>Ottobre</p>");
			break;
		case 10:
			document.write("<p>Novebre</p>");
			break;
		case 11:
			document.write("<p>Dicembre</p>");
	}
}



