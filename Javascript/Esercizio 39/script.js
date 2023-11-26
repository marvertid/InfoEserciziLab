/*
È possibile formare una successione applicando il seguente algoritmo (congettura di Collatz):
1. si prenda un intero positivo n;
2. se n = 1, l'algoritmo termina.
3. se n è pari, lo si divida per due, altrimenti lo si moltiplichi per 3 e si aggiunga 1.
4. ritornare al punto 2
 MARVERTI DIEGO 4AI 
*/
let n = 5;
document.write("<h1>Esercizio 39</h1>");
document.write("<p>Numero: <b>" + n + "</b></p>");
document.write("<p><b>" + n + "</b><p>");
while (n != 1) {
	if (n % 2 == 0) {
		n /= 2;
	}else {
		n = (n * 3) + 1;
	}
	document.write("<p><b>" + n + "</b><p>");
}

