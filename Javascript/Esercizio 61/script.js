/* Scrivere un’applicazione che, dato un elenco di alunni fornito come stringa (cognomi separati da
virgole), ne indichi uno (da interrogare).
MARVERTI DIEGO 4AI*/

let output = document.getElementById("output");
let alunni = [];
let random;
const MAXALUNNI = 35;

function roll() {
    let inputAlunni = document.getElementById("inputAlunni").value;
    alunni = inputAlunni.split(", ", MAXALUNNI);
    if(alunni.length >= 2) {
        output.style.color = "black";
        random = Math.floor(Math.random() * alunni.length);
        output.textContent = "L'alunno estratto e`: " + alunni[random];
    } else {
        output.style.color = "red";
       output.textContent = "Errore!";
    }
}
//
