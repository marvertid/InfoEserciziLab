/* Scrivere un programma che calcoli la media aritmetica fra numeri naturali (zero escluso) specificati
dall’utente. La richiesta di nuovi numeri si arresta all’inserimento di uno zero.
 * MARVERTI DIEGO 4AI
 */
namespace Esercizio_4
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Int128 n = 0, sum = 0;
            int i = 0;
            do
            {
                Console.WriteLine("Inserire valore: ");
                Int128.TryParse(Console.ReadLine(), out n );
                sum += n;
                i++;
            } while (n != 0);
            double res = (double) sum / i;
            Console.WriteLine("Media aritmetica: " + res);
        }
    }
}