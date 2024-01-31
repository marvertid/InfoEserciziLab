/*
 * Scrivere un programma C# per generare e visualizzare il pattern riportato di seguito
 * MARVERTI DIEGO 4AI
 */

namespace Esercizio_8
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nLett;
            Console.WriteLine("Inserire il numero di lettere: ");
            int.TryParse(Console.ReadLine(), out nLett);
            Console.WriteLine("A");
            for (int i = 2; i < nLett; i++)
            {
                Console.Write("A");
                for (int j = 1; j < i; j++)
                {
                    Console.Write("A");
                    Console.Write("A");

                }
                Console.WriteLine();
            }
        }
    }
}
