using System.Linq;

namespace Esercizio_27
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private string[] colors = { "Red", "Blue", "Yellow", "Orange", "Green", "Violet", "Magenta", "Black", "LightBlue" };
        private void Form1_Load(object sender, EventArgs e)
        {
            Label[] labels = this.Controls.OfType<Label>().ToArray();
            foreach (Label label in labels)
            {
                label.Text = String.Empty;
            }
        }

        private void regenerateButton_Click(object sender, EventArgs e)
        {
            Random random = new Random();
            int rand = random.Next(colors.Length);
            Label[] labels = this.Controls.OfType<Label>().ToArray();
            foreach (Label label in labels)
            {
                label.Text = colors[rand];
                rand = random.Next(colors.Length);
                switch (rand)
                {
                    case 0:
                        label.ForeColor = Color.Red;
                        break;
                    case 1:
                        label.ForeColor = Color.Blue;
                        break;
                    case 2:
                        label.ForeColor = Color.Yellow;
                        break;
                    case 3:
                        label.ForeColor = Color.Orange;
                        break;
                    case 4:
                        label.ForeColor = Color.Green;
                        break;
                    case 5:
                        label.ForeColor = Color.Violet;
                        break;
                    case 6:
                        label.ForeColor = Color.Magenta;
                        break;
                    case 7:
                        label.ForeColor = Color.Black;
                        break;
                    case 8:
                        label.ForeColor = Color.LightBlue;
                        break;

                }
            }
        }
    }
}