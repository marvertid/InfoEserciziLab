namespace Esercizio_28
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            fileSaveCheck.Text = string.Empty;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            String nameSurname = nameSurnameInput.Text;
            String sex = sexInput.Text;
            String eyesColor = eyesColorPicker.Text;
            bool isHigher180cm = heightCheck.Checked;
            bool isHeavier90kg = weightCheck.Checked;
            String athleticDesc = athleticDescInput.Text;

            try
            {
                using (StreamWriter sw = new StreamWriter("log.txt"))
                {
                    sw.WriteLine("Nome e cognome: " + nameSurname);
                    sw.WriteLine("Sesso: " + sex);
                    sw.WriteLine("Colore degli occhi: " + eyesColor);
                    sw.WriteLine("E` piu' alto di 180cm: " + isHigher180cm.ToString());
                    sw.WriteLine("E` piu' pesante di 90kg: " + isHeavier90kg.ToString());
                    sw.WriteLine("Descrizione capacita` atlectiche: " + athleticDesc);
                    fileSaveCheck.Text = "Salvato con successo.";
                    fileSaveCheck.ForeColor = Color.Green;
                    sw.Close();
                }
            }
            catch (Exception ex)
            {
                fileSaveCheck.Text = "Erorre.";
                fileSaveCheck.ForeColor = Color.Red;
            }
        }
    }
}