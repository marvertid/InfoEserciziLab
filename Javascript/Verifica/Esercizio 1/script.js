/* */

let text = document.getElementById("text");
let output = document.getElementById("output");

function check() {
    if (document.forms[0].checkValidity()) {
        let flag = true;
        let temp = text.value.toLowerCase().split(" ");
        for (let i = 0; i < temp.length - 1; i++) {
            if(temp[i][0] != temp[i + 1][0]) {
                flag = false;
            }
        }
        if (flag == true) {
            output.textContent = "Tautungramma";
            output.style.color = "green";
            output.style.fontWeight = "Normal";
        } else {
            output.textContent = "Non tautungramma";
            output.style.color = "red";
            output.style.fontWeight = "Normal";
        }
    } else {
        output.textContent = "ERRORE";
        output.style.color = "red";
        output.style.fontWeight = "Bold";
    }
}