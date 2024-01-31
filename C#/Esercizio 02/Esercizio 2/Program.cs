/*Scrivere un programma per verificare se due numeri interi non negativi hanno la stessa cifra più
significativa
MARVERTI DIEGO 4AI*/

namespace Esercizio_2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string a, b;
            Console.WriteLine("Inserire il primo valore: ");
            a = Console.ReadLine();
            Console.WriteLine("Inserire il secondo valore: ");
            b = Console.ReadLine();
            int temp, temp1;
            if (int.TryParse(a, out temp) && int.TryParse(b, out temp1) && temp > 0 && temp1 > 0)
            {
                int maxa = 0;
                int maxb = 0;
                foreach (char i in a)
                {
                    int x = Convert.ToInt32(Convert.ToString(i));
                    if (x > maxa)
                    {
                        maxa = x;
                    }


                }
                foreach (char i in b)
                {
                    int x = Convert.ToInt32(Convert.ToString(i));
                    if (x > maxb)
                    {
                        maxb = x;
                    }
                }
                Console.WriteLine("Cifra 1: " + maxa + " Cifra 2: " + maxb);
            }

        }
    }
}