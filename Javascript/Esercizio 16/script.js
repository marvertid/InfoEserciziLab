
/*
 Scrivere uno script che, dato un tempo espresso in secondi, restituisca l’equivalente in minuti e secondi. Per esempio: 184 secondi corrispondono a 3 minuti e 4 secondi.
 MARVERTI DIEGO 4AI
*/

let secondi = 151;
console.log("Secondi: " + secondi + "\n Equavilanete in minuti e secondi: " + Math.trunc(secondi / 60) + "m " + secondi % 60 + "s ");
