/*Acquisire un testo lungo. Restituire numero di lettere, parole, frasi e righe.
MARVERTI DIEGO 4AI*/

let inputText = document.getElementById("text");
let output = document.getElementById("output");

function count() {
    if (document.forms[0].checkValidity()) {
        let nCaratteri = [];
        nCaratteri = inputText.value.split("");
        let nParole = [];
        nParole = inputText.value.split(" ");
        let nFrasi = []
        nFrasi = inputText.value.split(".");
        let nRighe = []
        nRighe = inputText.value.split("\n");
        output.textContent = nCaratteri.length + " " + nParole.length + " " + nRighe.length;
    }

}