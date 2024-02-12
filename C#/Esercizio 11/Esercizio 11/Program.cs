/*Lo studente realizzi un’applicazione che permetta l’acquisizione di n valori numerici compresi
fra due dati estremi (estremi inclusi); l’applicazione deve ricavare, a scelta dell’utente finale,
valore minimo o valore massimo
MARVERTI DIEGO 4AI*/

namespace Esercizio_11
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("inserire il numero di numeri :");
            int.TryParse(Console.ReadLine(), out n);
            int[] array = new int[n];
            int input, valMax, valMin;
            Console.WriteLine("inserire valore max :");
            int.TryParse(Console.ReadLine(), out valMax);
            Console.WriteLine("inserire valore min :");
            int.TryParse(Console.ReadLine(), out valMin);
            Console.WriteLine("inserire numero: ");
            int.TryParse(Console.ReadLine(), out input); 
            array[0] = input;  
            int max = array[0];

            for (int i = 1; i < n; i++) {
                Console.WriteLine("inserire numero: ");
                int.TryParse(Console.ReadLine(), out input);
                if (input > valMax)
                {
                    Console.WriteLine("Errore! numero troppo grande");
                    i--;
                } else if (input < valMin)
                {
                    Console.WriteLine("Errore! numero troppo piccolo");
                    i--;
                }
                if (array[i] > max)
                {
                    max = array[i];
                }
            }
        }
    }
}