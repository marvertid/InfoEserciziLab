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
            int cifreNum = (int) Math.Log10(n) + 1;
            int cifra, temp = n, sumFatt = 0;
            for (int i = 0; i < cifreNum; i++)
            {
                cifra = temp % 10;
                temp = temp / 10;
                for(int j = cifra - 1; j > 0; j--)
                {
                    cifra *= j;
                }
                sumFatt += cifra;
            }

            if (sumFatt == n)
            {
                Console.WriteLine("numero bello");
            }
            else
            {
                Console.WriteLine("numero brutto");
            }
        }
    }
}

        }
    }
}
