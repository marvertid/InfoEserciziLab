/*Acquisire una stringa lunga almeno 10 caratteri; restituirla all’utente eliminando tutti gli eventuali
spazi presenti
MARVERTI DIEGO 4AI*/

let string1, string2 = "";

do {
	string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true || string1.length < 10);

string2 += string1.replaceAll(" ", "");

document.write(string2);