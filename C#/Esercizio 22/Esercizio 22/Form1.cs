namespace Esercizio_22
{
    public partial class Esercizio22 : Form
    {
        public Esercizio22()
        {
            InitializeComponent();
        }
        private void Testo_TextChanged(object sender, EventArgs e)
        {
            int n = 0;
            Testo.Text = Testo.Text.ToLower();
            foreach (char c in Testo.Text) { 
                if (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u')
                {
                    n++;
                }
            }
            ConteggioParole.Text = n.ToString();
        }
    }
}