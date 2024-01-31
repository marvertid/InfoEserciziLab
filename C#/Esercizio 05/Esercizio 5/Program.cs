/*Scrivere un programma che prenda in input una singola cifra
e un numero di righe; costruire un triangolo come mostrato
in figura
MARVERTI DIEGO 4AI
 */

namespace Esercizio_5
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int cifra, righe;
            do
            {
                Console.WriteLine("Cifra: ");
                int.TryParse(Console.ReadLine(), out cifra);
            } while (cifra < 0);
            do
            {
                Console.WriteLine("Numero di righe: ");
                int.TryParse(Console.ReadLine(), out righe);
            } while (righe < 0);
            int nCol = righe;
            for (int i = 0; i < righe; i++)
            {
                
                for (int j = 0; j < nCol; j++)
                {
                    Console.Write(cifra);
                }
                nCol--;
                Console.WriteLine("");
                
            }

        }
    }
}