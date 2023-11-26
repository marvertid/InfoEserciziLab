/* Scrivere un’applicazione per verificare se un determinato indirizzo IPv4 sia valido o meno.
MARVERTI DIEGO 4AI*/

let inputIp = document.getElementById("inputIp");
let output = document.getElementById("output");
let arr = []
function check() {
    arr = inputIp.value.split(".", 4);
    if (arr[0] >= 0 && arr[0] <= 255 && arr[1] >= 0 && arr[1] <= 255 && arr[2] >= 0 && arr[2] <= 255 && arr[3] >= 0 && arr[3] <= 255) {
        output.style.color = "black";
        output.textContent = "INDIRIZZO VALIDO!"
    } else {
        output.style.color = "red";
        output.textContent = "INDIRIZZO NON VALIDO!";
    }
}
