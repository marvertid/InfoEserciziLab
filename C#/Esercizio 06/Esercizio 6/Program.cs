/*
 * Scrivere un programma C# per verificare se una data lettera è una vocale o una consonante e se è
presente o meno nell’alfabeto italiano
MARVERTI DIEGO 4AI
 */


namespace Esercizio_6
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Scrivere una lettera: ");
            char c;
            char.TryParse(Console.ReadLine(), out c);
            c = char.ToLower(c);
            if (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u') {
                Console.WriteLine("Vocale");   
            } else
            {
                Console.WriteLine("Consonante");
            }
            if(c == 'j' || c == 'w' || c == 'x' || c == 'k' || c == 'y')
            {
                Console.WriteLine("Lettera non presente nell'alfabeto italiano");
            } else
            {
                Console.WriteLine("Lettera presente nell'alfabeto italiano");
            }
        }
    }
}