/* BMI. Lo studente realizzi un’applicazione che permetta di calcolare l’indice di massa corporea
(BMI), utilizzato come indicatore dello stato di peso forma. Il BMI di una persona si calcola come il
rapporto tra il peso, espresso in chilogrammi, e il quadrato dell’altezza, espressa in metri.
Segnalare all’utente un eventuale dato anomalo, tenendo presente che un BMI fra 18,5 e 25 indica
un peso regolare.
MARVERTI DIEGO 4AI*/
let inputKg = document.getElementById("inputKG");
let inputM = document.getElementById("inputM");
let output = document.getElementById("output");

function calculate() {
    if (!Number.isNaN(Number.parseFloat(inputM.value) && Number.isNaN(Number.parseFloat(inputKg.value)))) {
        output.style.color = "black";
        output.textContent = (inputKg.value / inputM.value ** 2).toFixed(2);
    }else {
        output.textContent = "Errore!";
        output.style.color = "red";
    }

}