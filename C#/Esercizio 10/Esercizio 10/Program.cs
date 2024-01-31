/*
 * Verificare se un dato numero è un numero di Kaprekar, ovvero un intero non negativo il cui
quadrato può essere suddiviso in due parti che, sommate tra loro, forniscono nuovamente il
numero di partenza.
MARVERTI DIEGO 4AI
 */
namespace Esercizio_10
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("Inserire un numero minore di due cifre: ");
            int.TryParse(Console.ReadLine(), out n);
            int temp = n * n;
            int parte1 = temp % 100;
            int parte2 = temp / 100;
            if (parte1 + parte2 == n)
            {
                Console.WriteLine("Numero di Kaprekar");
            } else
            {
                Console.WriteLine("Numero non di Kaprekar");
            }
        }
    }
}
