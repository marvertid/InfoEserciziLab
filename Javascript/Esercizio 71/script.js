/*Acquisire un testo non più lungo di 255 caratteri. In fase di digitazione, mostrare all’utente il
numero di caratteri rimanenti.
MARVERTI DIEGO 4AI*/

let inputText = document.getElementById("text");
let output = document.getElementById("output");

inputText.onkeydown = function () {
    if (document.forms[0].checkValidity()) {
        let nCaratteri = [];
        nCaratteri = inputText.value.split("");
        if (nCaratteri.length > 255) {
            output.textContent = "Numero di caratteri troppo alto!"
            output.style.color = "red";
        }
        output.textContent = "Numero di caratteri rimasti: " + (255 - nCaratteri.length)
    }
}
