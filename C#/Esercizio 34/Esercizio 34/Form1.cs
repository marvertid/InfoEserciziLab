using System.Xml;

namespace Esercizio_34
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            tempLabel.Text = string.Empty;
            statoLabel.Text = string.Empty;
            invis.Visible = false;
            tempLabel.Text = trackBar1.Value.ToString();
        }

        private void misuraButton_Click(object sender, EventArgs e)
        {
            misuraButton.Enabled = false;
            Random random = new Random();
            int rand = random.Next() % 6 + 35;
            invis.Text = rand.ToString();
            timer.Start();
        }

        private void timer_Tick(object sender, EventArgs e)
        {
            int value = int.Parse(invis.Text);
            if (trackBar1.Value != value)
            {
                trackBar1.Value++;
                tempLabel.Text = trackBar1.Value.ToString();
            } else
            {
                if (trackBar1.Value < 37.5)
                {
                    statoLabel.Text = "TEMP NORMALE";
                } else if (trackBar1.Value < 38.5)
                {
                    statoLabel.Text = "FEBBRE LIEVE";
                } else if (trackBar1.Value < 39)
                {
                    statoLabel.Text = "FEBBRE MODERATA";
                } else
                {
                    statoLabel.Text = "FEBBRE ALTA";
                }
                timer.Stop();
                misuraButton.Enabled = true;
            }
        }
    }
}