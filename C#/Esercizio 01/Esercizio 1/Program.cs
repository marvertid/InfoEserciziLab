namespace Esercizio_1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Inserire il primo valore: ");
            int a;
            int.TryParse(Console.ReadLine(), out a);
            Console.WriteLine("Inserire secondo valore: ");
            int b;
            int.TryParse(Console.ReadLine(), out b);
            Console.WriteLine("a + b = " + (a + b));
        }
    }
}