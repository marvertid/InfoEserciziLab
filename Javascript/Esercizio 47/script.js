/*Data una frase, verificare se si tratta un pangramma, ovvero una frase in cui vengono
utilizzate tutte le lettere dell’alfabeto almeno una volta (per es., “The quick brown fox jumps over
the lazy dog”)
MARVERTI DIEGO 4AI*/

let alfabeto = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
let string1, string2, string3;
let string4, string5;

do {
	string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true);

string2 = string1.toLowerCase();
string3 = string2.split("");
string3.sort();
string4 = String(string3).replaceAll(" ", "");
string5 = string4.replaceAll(",", "");

let flag = true;
let j, i = 0;
let t = 0;
document.write(string5);
while(i < string5.length && flag){
	j = 0;
	while (j < string5.length && alfabeto[i] != string5[j]) {
		flag = false;
		j++;
	}
	document.write("<p>" + alfabeto[i] +"</p>")
	document.write("<p>" + string5[j] +"</p>")
	if (alfabeto[i] == string5[j]) {
		flag = true;
	}
	i++;
}
document.write(i);
if (flag) {
	document.write("Pangramma");
} else {
	document.write("Non Pangramma");
}