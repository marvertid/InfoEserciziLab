namespace gioco3Carte
{
    public partial class Form1 : Form
    {
        int[] pos = new int[3];
        Image[] carte = new Image[4];
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            carte[1] = Image.FromFile("carte/assoSpade.png");
            carte[0] = Image.FromFile("carte/setteDenari.png");
            carte[2] = Image.FromFile("carte/back.png");
            carta1.BackgroundImage = carte[2];
            carta2.BackgroundImage = carte[2];
            carta3.BackgroundImage = carte[2];
            Random random = new Random();
            pos[0] = random.Next(2);
            if (pos[0] == 1)
            {
                pos[1] = 0;
            }
            else
            {
                pos[1] = random.Next(2);
            }
            pos[2] = (pos[0] == 1 || pos[1] == 1) ? 0 : 1;
            winLoseButton.Enabled = false;
        }

        private void carta_Click(object sender, EventArgs e)
        {
            carta1.BackgroundImage = carte[pos[0]];
            carta2.BackgroundImage = carte[pos[1]];
            carta3.BackgroundImage = carte[pos[2]];
            if (sender == carta1 && pos[0] == 1)
            {
                MessageBox.Show("HAI VINTO");
            }
            else if (sender == carta2 && pos[1] == 1)
            {
                MessageBox.Show("HAI VINTO");
            }
            else if (sender == carta3 && pos[2] == 1)
            {
                MessageBox.Show("HAI VINTO");
            }
            else
            {
                MessageBox.Show("HAI PERSO");
            }
            winLoseButton.Show();
            winLoseButton.Enabled = true;
        }

        private void winLoseButton_Click(object sender, EventArgs e)
        {
            carta1.BackgroundImage = carte[2];
            carta2.BackgroundImage = carte[2];
            carta3.BackgroundImage = carte[2];
            Random random = new Random();
            pos[0] = random.Next(2);
            if (pos[0] == 1)
            {
                pos[1] = 0;
            }
            else
            {
                pos[1] = random.Next(2);
            }
            pos[2] = (pos[0] == 1 || pos[1] == 1) ? 0 : 1;
        }
    }
}