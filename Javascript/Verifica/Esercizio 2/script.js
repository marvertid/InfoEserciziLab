let output = document.getElementById("output");
const FACES4 = 4;
const FACES6 = 6;
const FACES8 = 8;
const FACES10 = 10;
const FACES12 = 12;
const FACES20 = 20;

function roll4() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES4 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}

function roll6() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES6 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}

function roll8() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES8 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}

function roll10() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES10 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}

function roll12() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES12 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}

function roll20() {
    if (document.forms[0].checkValidity()) {
        let random = 1 + Math.floor(FACES20 * Math.random());
        output.textContent = "Numero casuale: " + random;
    } else {
        output.textContent = "Errore!";
    }
}