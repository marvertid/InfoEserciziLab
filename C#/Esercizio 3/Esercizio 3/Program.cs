/* Scrivere un programma che calcoli la somma di n valori inseriti dall’utente
 * MARVERTI DIEGO 4AI
 */

namespace Esercizio_3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Inserire numero di valori da sommare: ");
            int n;
            int.TryParse(Console.ReadLine(), out n);
            int sum = 0;
            for (int i = 0; i < n; i++)
            {
                Console.WriteLine("Inserire il valore: ");
                int input;
                int.TryParse(Console.ReadLine(), out input);
                sum += input;
            }
            Console.WriteLine("Somma: " + sum);
        }
    }
}