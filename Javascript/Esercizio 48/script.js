/*Sia data una stringa non più lunga di 44 caratteri; dopo averne eliminato
tutti gli spazi, sostituire tutte le vocali con un’unica altra vocale, scelta dall’utente.
MARVERTI DIEGO 4AI*/

let inputString;
let inputChar;
let vocali = ["a", "e", "i", "o", "u"];

do {
	inputString = prompt("Inserire una stringa (< di 44 caratteri): ");
} while(Number.isNaN(Number(inputString)) != true || inputString.length > 44);
do {
	inputChar = prompt("Inserire una vocale da sostituire: ");
} while (Number.isNaN(Number(inputChar)) != true || inputChar.length > 1 || (inputChar[0] != "a" && inputChar[0] != "e" && inputChar[0] != "i" && inputChar[0] != "o" && inputChar[0] != "u"));

let outputString = inputString.replaceAll(" ", "").replaceAll("a", inputChar).replaceAll("e", inputChar).replaceAll("i", inputChar).replaceAll("o", inputChar).replaceAll("u", inputChar);

document.write(outputString);
	