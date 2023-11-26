/*Richiedere all’utente un numero intero positivo n. Stampare per n volte la parola “Loki”,
utilizzando per ogni lettera un font scelto casualmente.
MARVERTI DIEGO 4AI*/

let arrayFont = ["Bahnschrift", "Modern", "Script", "Segoe UI Semibold"];
let n;
const LOKISTRING = "Loki";
do {
	n = prompt("Inserire un numero: ");
} while(Number.isNaN(Number(n))); 

for (let i = 0; i < n; i++) {
	for (let j = 0; j < 4; j++) {
		let random = Math.floor(Math.random() * 4);
		document.write("<span style=\"font-family:" + arrayFont[random] + "\"> " + LOKISTRING[j] + "</span>");
	}
	document.write("<br />");
}