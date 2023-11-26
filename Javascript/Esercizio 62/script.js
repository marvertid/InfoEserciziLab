/*Realizzare un’applicazione che permetta, senza l’uso della tastiera, l’acquisizione di numeri interi
compresi fra -10 e +10 (estremi inclusi); l’applicazione deve stampare i valori acquisiti in ordine
crescente e decrescente.
MARVERTI DIEGO 4AI*/ 
let output = document.getElementById("output");
let sortedOut1 = document.getElementById("sortedOut1");
let sortedOut2 = document.getElementById("sortedOut2");
let showOut = document.getElementsByClassName("showOut");
let inputNumber = [];
let i = 0;
let stringOut = "";

showOut[0].style.visibility = "hidden";
showOut[1].style.visibility = "hidden";

function add() {
    inputNumber[i] = Number.parseInt(document.getElementById("inputNumber").value);

    stringOut += String(inputNumber[i]) + ", ";
    output.textContent = stringOut;
    i++;
}

function sort() {
    if (i > 1) {
        sortedOut1.style.color = "black";
        sortedOut2.style.color = "black";
        showOut[0].style.visibility = "visible";
        showOut[1].style.visibility = "visible";

        inputNumber.sort((a, b) => a - b);
        let out1 = inputNumber.join(", ");

        inputNumber.sort((a, b) => b - a);
        let out2 = inputNumber.join(", ");
        
        sortedOut1.textContent = out1;
        sortedOut2.textContent = out2;

    }else {
        sortedOut1.textContent = "Errore!"
        sortedOut2.textContent = "Errore!"
        sortedOut1.style.color = "red";
        sortedOut2.style.color = "red";
    }
}