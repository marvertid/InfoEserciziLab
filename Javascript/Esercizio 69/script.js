/*Realizzare un’applicazione per l’acquisizione di dati personali. Mediante un form HTML, sono
richiesti all’utente nome, cognome e indirizzo e-mail; quest’ultimo, affinché si sia certi della sua
correttezza, dovrà essere richiesto due volte in due distinti campi. Validare l’e-mail dell’utente
confrontando i due indirizzi acquisiti, ignorando però gli eventuali punti presenti prima della
chiocciola (ad esempio, il controllo è positivo per “ing.mario.rossi@gmail.com” e
“ingmariorossi@gmail.com”).
MARVERTI DIEGO 4AI*/

let inputMail = document.getElementById("email");
let emailConfirm = document.getElementById("emailConfirm");
let output = document.getElementById("output");

function signup() {
    let temp = [];
    let temp1 = [];
    if (document.forms[0].checkValidity()) {
        temp = emailConfirm.value.split("@", 2);
        temp[0] += "@"
        temp[0] = temp[0].replaceAll(".", "");
        temp1 = inputMail.value.split("@", 2);
        temp1[0] += "@"
        temp1[0] = temp1[0].replaceAll(".", "");

        if (temp[0] == temp1[0] && temp[1] == temp1[1]) {
            output.textContent = "Sign up effettuato con successo!";
            output.style.color = "green";
        } else {
            output.textContent = "Email non uguale!";
            output.style.color = "red";
        }
    } else {
        output.textContent = "Indirizzo email non valido!"
        output.style.color = "red";
    }
}