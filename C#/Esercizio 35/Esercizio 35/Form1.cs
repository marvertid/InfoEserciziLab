namespace Esercizio_35
{
    public partial class Form1 : Form
    {
        bool isOn = false;
        int marceTemp = 0;
        int temp = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            giriLabel.Text = "0";
        }

        private void startButton_Click(object sender, EventArgs e)
        {

            if (!isOn)
            {
                timer1.Start();
                startButton.Text = "FERMA";
            }
            else
            {
                timer1.Stop();
                startButton.Text = "AVVIA";
            }
            isOn = !isOn;
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            int giri = int.Parse(giriLabel.Text);
            if (sender == timer1)
            {
                giri += 5;
                marceTemp = marce.Value;
                if (giri > 2000)
                {
                    temp += 10;
                    if (temp > 2000)
                    {
                        giri = 0;
                        marce.Value = 1;
                        temp = 0;
                        timer1.Stop();
                        startButton_Click(sender, e);
                    }
                } 
            } else
            {
                temp = 0;
                if (marceTemp < marce.Value)
                {
                    giri -= 1000;
                } else if (marceTemp > marce.Value)
                {
                    giri += 1000;
                }
            }
            giriLabel.Text = giri.ToString();
        }
    }
}