/*
Scrivere uno script che converta una nota musicale dalla notazione inglese a quella sud-est
europea, in base alle seguenti equivalenze:
C → Do
D → Re
E → Mi
F → Fa
G → Sol
A → La
B → Si
MARVERTI DIEGO 4AI 
*/
let nota = "b"

document.write("<h1>Esercizio 26</h1>");
document.write("<p>Nota in notazione inglese: <b>" + nota + "</b></p>");

switch (nota) {
	case "a":
	case "A":
		document.write("<p>Nota in notazione sud-est europea: <b>La</b></p>");
		break;
	case "b":
	case "B":
		document.write("<p>Nota in notazione sud-est europea: <b>Si</b></p>");
		break;
	case "c":
	case "C":
		document.write("<p>Nota in notazione sud-est europea: <b>Do</b></p>");
		break;
	case "d":
	case "D":
		document.write("<p>Nota in notazione sud-est europea: <b>Re</b></p>");
		break;
	case "e":
	case "E":
		document.write("<p>Nota in notazione sud-est europea: <b>Mi</b></p>");
		break;
	case "f":
	case "F":
		document.write("<p>Nota in notazione sud-est europea: <b>Fa</b></p>");
		break;
	case "g":
	case "G":
		document.write("<p>Nota in notazione sud-est europea: <b>Sol</b></p>");
		break;
}

