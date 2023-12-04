/*Un lipogramma è costituito da un testo in cui non può essere usata una determinata lettera.
Scrivere un’applicazione che, in fase di digitazione, permetta di verificare se una data stringa è un
lipogramma.
MARVERTI DIEGO 4AI*/


let inputText = document.getElementById("text");
let inputLetter = document.getElementById("input");
let output = document.getElementById("output");
inputText.onkeydown = function () {
	let text = [];
	let letter = [];
	letter = inputLetter.value;
	text = inputText.value.split("");

	if (text.indexOf(letter[0]) != -1) {
		output.textContent = "Non lipogramma!"
		output.style.color = "red";
	} else {
		output.textContent = "Lipogramma!"
		output.style.color = "green";
	} 
}