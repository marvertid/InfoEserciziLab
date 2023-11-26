/*Scrivere un’applicazione che, data una serie di valori numerici, permetta di ricavarne minimo,
massimo o media aritmetica, a scelta dell’utente.
MARVERTI DIEGO 4AI*/
let input = document.getElementById("inputNumber");
let showInput = document.getElementById("showInput");
let outMin = document.getElementById("outMin");
let outMax = document.getElementById("outMax");
let outAvg = document.getElementById("outAvg");
let showOut = document.getElementsByClassName("showOut");
let inputArr = [];
let stringOut = "";

outMin.style.display = "none";
outMax.style.display = "none";
outAvg.style.display = "none";
showOut[0].style.display = "none";
showOut[1].style.display = "none";
showOut[2].style.display = "none";

let i = 0;
function add() {
    if (Number.isInteger(Number.parseInt(input.value))) {
        inputArr[i] = Number.parseInt(input.value);

        stringOut += String(inputArr[i]) + ", ";
        showInput.textContent = stringOut;
        i++;
    }
}

function minValue() {
    showOut[0].style.display = "block";
    outMin.style.display = "inline";

    outMin.textContent = Math.min(...inputArr);
}

function maxValue() {
    showOut[1].style.display = "block";
    outMax.style.display = "inline";

    outMax.textContent = Math.max(...inputArr);
}

function avg() {
    showOut[2].style.display = "block";
    outAvg.style.display = "inline";
    let sum = 0;
    for (let j = 0; j < i; j++) {
        sum += inputArr[j]
    }
    sum /= i;
    outAvg.textContent = sum;
}
