/*Scrivere un programma per inserire una stringa nella posizione specificata in una determinata
stringa. Es.:
The brown fox → The quick brown fox

MARVERTI DIEGO 4AI
non funziona su .net 7.0*/

namespace Esercizio_15
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int pos = 0;
            string stringa;
            string stringInp;
            Console.WriteLine("Inserire la stringa inizale: ");
            stringa = Console.ReadLine();
            Console.WriteLine(stringa);
            Console.WriteLine("Inserire posizione nella quale inserire la stringa: ");
            int.TryParse(Console.ReadLine(), out pos);
            Console.WriteLine("Inserire stringa: ");
            stringInp = Console.ReadLine();
            string[] temp = stringa.Split("");
            Console.WriteLine(temp[0]);
            temp[pos] = stringInp;
            for (int i  = 0; i < temp.Length; i++)
            {
                stringa = stringa + temp[i];
            }
            Console.WriteLine(stringa);
        }
    }
}