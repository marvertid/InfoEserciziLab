/*Acquisto matite. Simulare l’acquisto all’ingrosso di una data quantità di matite (non più di 1000).
Le matite sono disponibili in confezioni da 50, 20, 10 e 5 pezzi. L’applicazione deve restituire il
numero di confezioni da acquistare. Es.:
195 matite → 3 confezioni da 50 pezzi, 2 confezioni da 20 pezzi, 1 confezione da 5 pezz
MARVERTI DIEGO 4AI*/

const conf1 = 50;
const conf2 = 20;
const conf3 = 10;
const conf4 = 5;

let output = document.getElementById("output");
let input = document.getElementById("inputN");

function calc() {
    if (input.checkValidity() && input.value < 1000) {
            let temp = Math.floor(input.value / 50);
            let temp1 = Math.floor((input.value - temp * 50) / 20);
            let temp2 = Math.floor((input.value - temp * 50 - temp1 * 20) / 10);
            let temp3 = Math.floor((input.value - temp * 50 - temp1 * 20 - temp2 * 10) / 5);

            output.textContent = input.value + " matite -> " + temp +  " conf da 50, " + temp1 + " conf da 20, " + temp2 + " conf da 10, " + temp3 + " conf da 5"
    } else {
        output.textContent = "Errore!"
        output.style.color = "red";
    }

}