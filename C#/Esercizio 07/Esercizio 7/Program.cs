/*
 * Scrivere programma che verifichi se un numero è perfetto. Un numero perfetto è un intero
positivo uguale alla somma dei suoi divisori positivi, escluso il numero stesso.
MARVERTI DIEGO 4AI
 */

namespace Esercizio_7
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("Inserire un numero: ");
            int.TryParse(Console.ReadLine(), out n);
            int sum = 0;
            for (int i = 1; i <= n/2; i++)
            {
                if (n % i == 0)
                {
                    sum += i;
                }
            }

            if (sum == n)
            {
                Console.WriteLine("Numero perfetto!");
            }else
            {
                Console.WriteLine("Numero non perfetto!");
            }
        }
    }
}
