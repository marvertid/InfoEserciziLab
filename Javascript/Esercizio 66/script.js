/*Validazione data. Dati giorno e mese (acquisiti separatamente), validare una data (non
considerare anni bisestili). Stabilire in quale stagione cade:
 Primavera: dal 20 marzo al 20 giugno;
 Estate: dal 21 giugno al 22 settembre;
 Autunno: dal 23 settembre al 21 dicembre;
 Inverno: dal 22 dicembre al 19 marzo.
MARVERTI DIEGO 4AI*/


let output = document.getElementById("output");
let seasonOutput = document.getElementById("seasonOutput");
function validate() {
    let inputGiorno = Number.parseInt(document.getElementById("inputGiorno").value);
    let inputMese = Number.parseInt(document.getElementById("inputMese").value);
    if ((inputMese == 2 && inputGiorno > 28) || ((inputMese == 4 || inputMese == 6 || inputMese == 9 || inputMese == 11) && inputGiorno == 31)) {
        output.textContent = "Data non valida!";
        output.style.color = "red";
    }else {
        output.textContent = "Data Valida!"
        output.style.color = "green";
    }

}

function seasonFinder() {
    let inputGiorno = document.getElementById("inputGiorno").value;
    let inputMese = document.getElementById("inputMese").value;
    if (inputMese >= 3 && inputMese <= 6) {
        if ((inputMese == 3 && inputGiorno >= 20) || (inputMese > 3 && inputMese < 6) || (inputMese == 6 && inputGiorno <= 20)) {
            seasonOutput.textContent = "Primavera";
        }
    } else if (inputMese >= 6 && inputMese <= 9) {
        if ((inputMese == 6 && inputGiorno >= 21) || (inputMese > 6 && inputMese < 9) || (inputMese == 9 && inputGiorno <= 22)) {
            seasonOutput.textContent = "Estate";
        }
    } else if (inputMese >= 9 && inputMese <= 12) {
        if ((inputMese == 9 && inputGiorno >= 23) || (inputMese > 9 && inputMese < 12) || (inputMese == 12 && inputGiorno <= 21)) {
            seasonOutput.textContent = "Autunno";
        }
    } else {
        seasonOutput.textContent = "Inverno"
    }
}

//da risolvere