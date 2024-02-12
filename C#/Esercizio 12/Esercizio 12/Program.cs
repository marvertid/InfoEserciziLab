namespace Esercizio_12
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int[] array = new int[5];
            Random random = new Random();
            for (int i = 0; i < array.Length; i++)
            {
                array[i] = random.Next(0, 100);
            }
            foreach (int item in array)
            {
                Console.WriteLine(item);
            }
            int input;
            Console.WriteLine("Inserire il numero: ");
            int.TryParse(Console.ReadLine(), out input);
            int pos;
            do
            {
                Console.WriteLine("Inserire la posizione: ");
                int.TryParse(Console.ReadLine(), out pos);
            } while( pos < 0 || pos >= array.Length );
            for (int i = array.Length - 1; i > pos; i--)
            {
                array[i] = array[i - 1];
            }
            array[pos] = input;
            foreach (int item in array)
            {
                Console.WriteLine(item);
            }
        }
    }
}