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
            char lettera;
            char lettMax;
            char letTemp;
            for (int i = 0; i <= nLett; i++)
            {
                lettera = 'A';
                lettMax = (char)(i + lettera);
                for (int j = 0; j <= i; j++)
                { 
                    if (lettera < lettMax)
                    {
                        Console.Write(lettera);
                        lettera++;
                        
                    } else
                    {
                        letTemp = (char) (lettera - 1);
                        for (int k = i - 1; k > 0; k--)
                        {
                            letTemp--;
                            Console.Write(letTemp);
                        }
                    }
                }
                Console.WriteLine();
            }
        }
    }
}
