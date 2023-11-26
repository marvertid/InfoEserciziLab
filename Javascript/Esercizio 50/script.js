/*Hexspeak è una forma di scrittura ideata da alcuni programmatori. La sua particolarità è quella di
utilizzare le sole cifre del sistema numerico esadecimale (da 0 a 9 e da A a F).
 La cifra 0 viene usata al posto della lettera O;
 La cifra 1 al posto della I;
 La cifra 2 al posto della Z;
 La cifra 3 al posto della E;
 La cifra 5 al posto della S;
 La cifra 7 al posto della T
MARVERTI DIEGO 4AI*/
let inputString;
do {
	inputString = prompt("Inserire una stringa: ");
} while (Number.isNaN(Number(inputString)) != true);
let string = inputString.toUpperCase();
let outputString = "";
for (let i = 0; i < string.length; i++)
switch (string[i]) {
	case "O":
		outputString += "0";
		break;
	case "I":
		outputString += "1";
		break;
	case "Z":
		outputString += "2";
		break;
	case "E":
		outputString += "3";
		break;
	case "S":
		outputString += "5";
		break;
	case "T":
		outputString += "7";
		break;
	default: 
		outputString += string[i];
}

document.write(outputString);
