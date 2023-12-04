/*Scrivere un’applicazione che verifichi la robustezza di una data password. Per far sì che una
password sia robusta, deve rispettare dei requisiti di complessità, ovvero soddisfare delle linee
guida ben precise, per esempio:
 Lunghezza minima della stringa di 8 caratteri;
 Presenza di lettere minuscole (a-z);
 Presenza di lettere maiuscole (A-Z);
 Presenza di numeri arabi (0-9);
 Presenza di caratteri non alfanumerici (!, _, ?, #, *).
Sono previsti 5 livelli di sicurezza, stabiliti in base al numero di regole rispettate:
 Molto debole;
 Debole;
 Media;
 Forte;
 Molto forte.
MARVERTI DIEGO 4AI*/

let inputPass = document.getElementById("inputPass");
let output = document.getElementById("output");
let test = document.getElementById("test");

inputPass.onkeyup = function () {
	let maiusc = 0, minusc = 0, num = 0;
	flag = 0;
	if (inputPass.value.length >= 8) {
		flag++;
		for (let i = 0; i < inputPass.value.length && maiusc == 0; i++) {
			if (inputPass.value[i] >= "A" && inputPass.value[i] <= "Z") {
				maiusc = 1;
			}
		}
		for (let i = 0; i < inputPass.value.length && minusc == 0; i++) {
			if (inputPass.value[i] >= "a" && inputPass.value[i] <= "z") {
				minusc = 1;
			}
		}
		for (let i = 0; i < inputPass.value.length && num == 0; i++) {
			if (inputPass.value[i] >= "0" && inputPass.value[i] <= "9") {
				num = 1;
			}
		}

		if (maiusc == 1) {
			flag++;
		}
		if (minusc == 1) {
			flag++;
		}
		if(num == 1) {
			flag++;
		}
		if (inputPass.value.indexOf("!") != -1 || inputPass.value.indexOf("_") != -1 || inputPass.value.indexOf("?") != -1 || inputPass.value.indexOf("#") != -1 || inputPass.value.indexOf("*") != -1) {
			flag++;
		}
	}

	test.textContent = flag + "     " + inputPass.value;

	switch(flag) {
		case 0:
			output.textContent = "";
			break;
		case 1:
			output.style.color = "white";
			output.style.backgroundColor = "#ff0000";
			output.textContent = "Molto debole";
			break;
		case 2:
			output.style.color = "black";
			output.style.backgroundColor = "#ff5050";
			output.textContent = "Debole";
			break;
		case 3:
			output.style.color = "black";
			output.style.backgroundColor = "#ffc000";
			output.textContent = "Media";
			break;
		case 4:
			output.style.color = "black";
			output.style.backgroundColor = "#a8d08d";
			output.textContent = "Forte";
			break;
		case 5:
			output.style.color = "black";
			output.style.backgroundColor = "#538135";
			output.textContent = "Molto forte";
	}

}