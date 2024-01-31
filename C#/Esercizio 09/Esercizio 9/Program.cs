/*
 * Scrivere un programma che verifichi se la somma dei
fattoriali delle cifre di un dato numero è uguale al
numero stesso.
MARVERTI DIEGO 4AI
 */

using System.Runtime.ExceptionServices;

namespace Esercizio_9
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("Inserire un numero: ");
            int.TryParse(Console.ReadLine(), out n);
            int cifra1 = n / 100;
            int cifra2 = n / 10 - cifra1 * 10;
            int cifra3 = n % 10;
            for (int i = cifra1 - 1; i > 0; i--)
            {
                cifra1 *= i;
            }
            for (int i = cifra2 - 1; i > 0; i--)
            {
                cifra2 *= i;
            }
            for (int i = cifra3 - 1; i > 0; i--)
            {
                cifra3 *= i;
            }

            if (cifra1 + cifra2 + cifra3 == n)
            {
                Console.WriteLine("numero bello (non come il codice)");
            } else
            {
                Console.WriteLine("numero brutto (come il codice)");
            }
        }
    }
}
