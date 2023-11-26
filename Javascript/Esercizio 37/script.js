/*
 Sia dato n, un numero intero positivo; costruire una breve applicazione che generi in sequenza i
 nomi di n mesi dell’anno. Es. (n = 14)
 MARVERTI DIEGO 4AI 
*/
let nRighe = 5, num = 0;
document.write("<h1>Esercizio 37</h1>");
document.write("<p>Numero di righe: <b>" + nRighe + "</b></p>");
for (let i = 1; i <= nRighe; i++) {
	for (let j = 1; j <= i; j++) {
		num++;
		document.write("<b> " + num + " </b>");
	}
	document.write("<br />");
}


