/*Scrivere uno script per concatenare una data stringa n volte
MARVERTI DIEGO 4AI*/



let string1, n, string2 = "";
do {
	string1 = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(string1)) != true);  
do {
	n = prompt("Inserire un numero: ");
} while (n == null || n === "" || Number.isNaN(Number(n)));  

for (let i = 0; i < n; i++) {
	string2 += string1 + " ";
}

document.write("<p>" + string2 + "</p>");