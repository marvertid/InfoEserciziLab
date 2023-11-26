/*Scrivere uno script che, data una frase, la restituisca con tutte le iniziali maiuscole
MARVERTI DIEGO 4AI*/

let string1, string2 = "";

do {
	string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true);

string2 += string1[0].toUpperCase();
for (let i = 1; i < string1.length; i++) {
	if (string1[i] == " ") {
		string2 += string1[i];
		string2 += string1[i + 1].toUpperCase();
		i += 1;
	} else {
		string2 += string1[i];

	}
} 
document.write("" + string2);