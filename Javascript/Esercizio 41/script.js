/*Scrivere uno script per controllare se un dato inserito da un utente è un numero o una stringa.
MARVERTI DIEGO 4AI*/

let user = prompt("Inserire una stringa o un numero: ");

if (!isNaN(Number(user))) {
	document.write("<p>E` un numero</p>");
} else {
	document.write("<p>E` una stringa</p>");
}