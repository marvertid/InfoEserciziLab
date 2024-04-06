namespace Esercizio_21
{
    public partial class Esercizio21 : Form
    {
        public Esercizio21()
        {
            InitializeComponent();
        }

        private void Incrementa_Click(object sender, EventArgs e)
        {
            int n = Convert.ToInt16(Numero.Text);

            if (n >= -100 && n < 100)
            {
                Incrementa.Enabled = true;
                Diminuisci.Enabled = true;
                n++;
                Numero.Text = n.ToString();
                if (n > 0)
                {
                    RadiceNumero.Text = Math.Sqrt(n).ToString();
                }
                else
                {
                    RadiceNumero.Text = "Non possibile!";
                }
            }
            else
            {
                Incrementa.Enabled = false;
            }

        }

        private void RadiceNumero_Click(object sender, EventArgs e)
        {

        }

        private void Diminuisci_Click(object sender, EventArgs e)
        {
            int n = Convert.ToInt16(Numero.Text);
            if (n > -100 && n <= 100)
            {
                Diminuisci.Enabled = true;
                Incrementa.Enabled = true;
                n--;
                Numero.Text = n.ToString();
                if (n > 0)
                {
                    RadiceNumero.Text = Math.Sqrt(n).ToString();
                }
                else
                {
                    RadiceNumero.Text = "Non possibile!";
                }
            }
            else
            {
                Diminuisci.Enabled = false;
            }
        }
    }
}