/*Data una stringa, trasformare le lettere minuscole in maiuscole e viceversa.
MARVERTI DIEGO 4AI*/



let string1 = "", string2 = "";

do {
string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true);  

for (let i = 0; i < string1.length; i++) {
	if(string1[i] >= "a" && string1[i] <= "z") {
		string2 += string1[i].toUpperCase();
	} else if(string1[i] >= "A" && string1[i] <= "Z") {
		string2 += string1[i].toLowerCase();
	}
	document.write(i);
}
document.write("<p>" + string2 + "</p>");