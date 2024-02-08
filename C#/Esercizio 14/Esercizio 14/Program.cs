/*
 * Nel calendario utilizzato dalla nazione di Cirpa, a ogni anno è associato uno fra 7 animali sacri:
nell’ordine, coniglio, gatto, drago, scimmia, serpente, cavallo, pavone. Sapendo che il 2020 è
stato un anno della scimmia, scrivere un’applicazione che permetta di ricavare, dato un anno,
l’animale sacro di riferimento.
MARVERTI DIEGO 4AI
 */

namespace Esercizio_14
{
    internal class Program
    {
        static void Main(string[] args)
        {
            String[] arrayAnimali = { "Coniglio", "Gatto", "Drago", "Scimmia", "Serpente", "Cavallo", "Pavone" };
            int input;
            int.TryParse(Console.ReadLine(), out input);
            Console.WriteLine("Anno: " + arrayAnimali[input % 7 - 1]);
        }
    }
}
