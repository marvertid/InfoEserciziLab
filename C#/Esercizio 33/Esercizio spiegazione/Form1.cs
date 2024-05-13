namespace Esercizio_spiegazione
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void tempTrackBar_ValueChanged(object sender, EventArgs e)
        {
            tempNumeric.Value = tempTrackBar.Value;
        }

        private void tempNumeric_ValueChanged(object sender, EventArgs e)
        {
            tempTrackBar.Value = (int)tempNumeric.Value;
        }

        private void timeTrackbar_ValueChanged(object sender, EventArgs e)
        {
            timeNumeric.Value = timeTrackbar.Value;
        }

        private void timeNumeric_ValueChanged(object sender, EventArgs e)
        {
            timeTrackbar.Value = (int)timeNumeric.Value;
        }

        private void startButton_Click(object sender, EventArgs e)
        {
            fornoTimer.Interval = 1000;
            fornoTimer.Start();
            fornoStatusLabel.Text = "Acceso";
        }

        private void fornoTimer_Tick(object sender, EventArgs e)
        {
            if (timeNumeric.Value > 1)
            {
                timeNumeric.Value--;
            } else
            {
                timeNumeric.Value = 0;
                fornoTimer.Stop();
                fornoStatusLabel.Text = "Spento";
            }

        }
    }
}