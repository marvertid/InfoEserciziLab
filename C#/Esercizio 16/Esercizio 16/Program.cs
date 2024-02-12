/*
 * Un lipogramma è costituito da un testo in cui non può essere usata una determinata lettera. In
un testo monovocalico, inoltre, si usa un’unica vocale. Scrivere un’applicazione che, a scelta
dell’utente, permetta di verificare se una data stringa è un lipogramma oppure un testo
monovocalico
MARVERTI DIEGO 4AI
 */

namespace Esercizio_16
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int scelta;
            do
            {
                Console.WriteLine("Scegliere: ");
                Console.WriteLine("\t 1.Verifica Monovocalico");
                Console.WriteLine("\t 2.Verifica Lipogramma");
                int.TryParse(Console.ReadLine(), out scelta);
            } while (scelta != 1 && scelta != 2);
        }

    }
}