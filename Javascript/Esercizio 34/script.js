/*
 Scrivere uno script in grado di ricavare il numero di cifre di un dato intero.
 MARVERTI DIEGO 4AI 
*/
let n = 995;
document.write("<h1>Esercizio 33</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
document.write("<p><b>" + n + "</b> ha <b>" + (Math.floor(Math.log10(n)) + 1) + "</b> cifre");



