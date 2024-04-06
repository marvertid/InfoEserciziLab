namespace Esercizio_23
{
    public partial class Esercizio23 : Form
    {
        public Esercizio23()
        {
            InitializeComponent();
        }

        private void Valida_Click(object sender, EventArgs e)
        {
            String stazioni = InputStazioni.Text;
            String[] temp = stazioni.Split(',');
            if (temp.Length > 15)
            {
                ValidaLabel.Text = "Erorre!";
            }
            int n;
            for (int i = 1; i < temp.Length; i++)
            {
                n = Convert.ToInt32(temp[i]);
                    int n1 = Convert.ToInt32(temp[i - 1]);
                    int testNum = Math.Abs(n1 - n);
                    if (n1 == n || testNum > 1)
                    {
                        ValidaLabel.Text = "Erorre!";
                    } else
                    {
                        ValidaLabel.Text = "Valido!";
                    }
            }
        }
    }
}