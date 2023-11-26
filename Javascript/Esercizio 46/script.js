/*Scrivere uno script che restituisca in ordine alfabetico i caratteri di una stringa. Convertire la stringa
in maiuscolo o minuscolo, a scelta dell’utente
MARVERTI DIEGO 4AI*/

let string1, string2, string3 = "";

do {
	string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true);

string2 = string1.split("");
string2.sort();
string3 += string2.join("");

let testo;
let conferma = confirm("Convertire la stringa in maiuscolo/minuscolo");
if (conferma) {
	let conferma2 = confirm("Premere OK per convertire in minuscolo?");
	if (conferma2) {
		document.write(string3.toLowerCase());
	} else {
		document.write(string3.toUpperCase());
	}
}
