/*Scrivere una funzione che permetta di calcolare la media geometrica fra 2, 3, 4 o 5 valori positivi;
la media geometrica di n termini è la radice n-esima del prodotto degli n valori
MARVERTI DIEGO 4AI*/

let inputViewer = document.getElementById("inputViewer");
let output = document.getElementById("output");
let input = document.getElementById("inputN");
let arr = [];

let i = 0;
function add() {
    if (input.checkValidity()) {
        if (i < 5) {
            arr[i] = input.value;
            inputViewer.textContent = arr;
            i++;
        } else {
            output.textContent = "Massimo numero di numeri raggiunto!"
            output.style.color = "red";
        }

    } else {
        output.textContent = "Errore in input!";
        output.style.color = "red";
    }

}

function geom() {
    let geoSum = 1;
    if (arr.length > 1) {
        for (let n of arr) {
            geoSum = (geoSum * n) ** (1/n);
        }
        output.textContent = "Media geometrica: " + geoSum.toFixed(4);
        output.style.color = "black";
    } else {
        output.textContent = "Numero di numeri minimo non superato!"
        output.style.color = "red";
    }


    
}