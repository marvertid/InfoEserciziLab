/*
 Scrivere uno script che, dato un numero intero a 3 cifre, restituisca le 3 cifre separate.
 MARVERTI DIEGO 4AI
*/

let n = 541;
console.log("Numero: " + n + ", unita: " + n % 10 + ", decine: " + Math.floor((n % 100) / 10) + " centinaia: " + Math.floor(n / 100));

