/*
 * Implementare il gioco consistente nell’indovinare 3 numeri interi generati casualmente
dall’applicazione e compresi fra 1 e 100. Il programma dovrà indirizzare l’utente verso il numero
giusto indicando se il numero inserito è più grande o più piccolo di quello cercato; la vittoria si
ottiene indovinando i tre numeri in meno di 12 tentativi. Nota bene: acquisire i 3 numeri in una
sola volta.
MARVERTI DIEGO 4AI
 */


namespace Esercizio_13
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            random.Next(1, 100 + 1);
            int a = random.Next(1, 100+1), b = random.Next(1, 100+1), c = random.Next(1, 100 + 1);
            int input1 = 0, input2 = 0, input3 = 0, i = 0;
            while ((input1 != a || input2 != b || input3 != c) && i < 12)
            {
                String input = Console.ReadLine();
                String[] temp = input.Split(' ');
                input1 = Convert.ToInt16(temp[0]);
                input2 = Convert.ToInt16(temp[1]);
                input3 = Convert.ToInt16(temp[2]);
                i++;
            }
            if(i < 12)
            {
               Console.WriteLine("Hai vinto!");
            } else
            {
                Console.WriteLine("Hai perso!");
            }
        }
    }
}
