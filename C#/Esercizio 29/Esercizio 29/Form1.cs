/*
 *  Scrivere un programma che visualizzi le parole (ricavate da una lista) che rispettano un
determinato criterio scelto dall’utente:
 Inizia con una vocale.
 Termina con una lettera accentata.
 Lunga più di 5 caratteri.
 Contiene una consonante doppia
MARVERTI DIEGO 4AI
 */

using System.DirectoryServices;
using System.Xml;

namespace Esercizio_29
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string temp = File.ReadAllText("sostantivi.txt");
            string[] parole = temp.Split("\r\n");
            string[] validWord = new string[10];
            bool valid;
            int k = 0;

            for (int i = 0; i < parole.Length; i++)
            {
                valid = false;
                char[] chars = parole[i].ToCharArray();
                int end = chars.Length - 1;
                if (startsVocal.Checked)
                {

                    if (chars[0] == 'a' || chars[0] == 'e' || chars[0] == 'i' || chars[0] == 'o' || chars[0] == 'u')
                        valid = true;
                }
                if (endAccent.Checked)
                {
                    if (chars[end] == 'à' || chars[end] == 'è' || chars[end] == 'ì' || chars[end] == 'ò' || chars[end] == 'ù' || chars[end] == 'é')
                        valid = true;
                }
                if (greater5Char.Checked)
                {
                    if (chars.Length >= 5)
                        valid = true;
                }
                if (doubleConsonant.Checked)
                {
                    for (int j = 0; j < chars.Length - 1; j++)
                    {
                        if (chars[j] != 'a' && chars[j] != 'e' && chars[j] != 'i' && chars[j] != 'o' && chars[j] != 'u')
                        {
                            if (chars[j] == chars[j + 1])
                            {
                                valid = true;
                            }
                        }
                    }
                }
                if (valid)
                {
                    if (k >= 10)
                    {
                        Array.Resize(ref validWord, k + 1);
                    }
                    validWord[k] = parole[i];
                    k++;
                }
                string temp1 = String.Join("\r\n", validWord);
                wordList.Text = temp1;
            }
        }
    }
}