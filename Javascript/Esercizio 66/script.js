/*Validazione data. Dati giorno e mese (acquisiti separatamente), validare una data (non
considerare anni bisestili). Stabilire in quale stagione cade:
 Primavera: dal 20 marzo al 20 giugno;
 Estate: dal 21 giugno al 22 settembre;
 Autunno: dal 23 settembre al 21 dicembre;
 Inverno: dal 22 dicembre al 19 marzo.
MARVERTI DIEGO 4AI*/


let output = document.getElementById("output");

function validate() {
    let inputGiorno = document.getElementById("inputGiorno").value;
    let inputMese = document.getElementById("inputMese").value;
    if ((inputMese == "Febbraio" && inputGiorno > 28) || ((inputMese == "Aprile" || inputMese == "Giugno" || inputMese == "Settembre" || inputMese == "Novembre") && inputGiorno == 31)) {
        output.textContent = "Data non valida!";
        output.style.color = "red";
    }else {
        output.textContent = "Data Valida!"
        output.style.color = "green";
    }

}

function seasonFinder() {
    
}