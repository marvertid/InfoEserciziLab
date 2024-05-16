using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Reflection;
using System.Security.AccessControl;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace VerificaC_
{
    public partial class Form1 : Form
    {
        List<int> points = new List<int> {1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 10, 10, 10};
        private Random random = new Random();
        int[] bestPoints = {0, 0, 0};
        private int n;
        private int nTentativi;
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            nTentativiLabel.Text = String.Empty;
            remainingTimeLabel.Text = String.Empty;
            best3Label.Text = String.Empty;
        }

        private void pictureBox_Click(object sender, EventArgs e)
        {

            nTentativi = int.Parse(nTentativiLabel.Text);
            if (nTentativi > 0)
            {
                PictureBox carta = (PictureBox)sender;
                carta.Visible = false;
                n = random.Next(points.Count);
                carta.Name = points[n].ToString();
                points.RemoveAt(n);
                nTentativi--;
                nTentativiLabel.Text = nTentativi.ToString();
                if (nTentativi <= 0)
                {
                    changePictureBoxState(false);
                    remainingTime.Stop();
                    MessageBox.Show("Tentativi finiti");
                    endGame();
                }
            }

        }

        private void changePictureBoxState(bool state)
        {
            pictureBox1.Enabled = state;
            pictureBox2.Enabled = state;
            pictureBox3.Enabled = state;
            pictureBox4.Enabled = state;
            pictureBox5.Enabled = state;
            pictureBox6.Enabled = state;
            pictureBox7.Enabled = state;
            pictureBox8.Enabled = state;
            pictureBox9.Enabled = state;
            pictureBox10.Enabled = state;
            pictureBox11.Enabled = state;
            pictureBox12.Enabled = state;
            pictureBox13.Enabled = state;
            pictureBox14.Enabled = state;
            pictureBox15.Enabled = state;
            pictureBox16.Enabled = state;
        }

        private void playButton_Click(object sender, EventArgs e)
        {
            changePictureBoxState(true);
            remainingTime.Start();

        }

        private void tentativi_ValueChanged(object sender, EventArgs e)
        {
            nTentativiLabel.Text = tentativi.Value.ToString();
            remainingTimeLabel.Text = (tentativi.Value * 10).ToString(); 
        }

        private void remainingTime_Tick(object sender, EventArgs e)
        {
            int time = int.Parse(remainingTimeLabel.Text);
            time--;
            remainingTimeLabel.Text = time.ToString();
            if (time <= 0)
            {
                remainingTime.Stop();
                changePictureBoxState(false);
                MessageBox.Show("Tempo finito");
                endGame();
            }

        }

        private void endGame()
        {
            int i = 0;
            foreach (Control control in this.Controls) 
            {
                if (control is PictureBox pictureBox && i < 3)
                {
                    if (pictureBox.Name == "10")
                    {
                        bestPoints[i] = 10;
                        i++;
                    } else if (pictureBox.Name == "2")
                    {
                        bestPoints[i] = 2;
                        i++;
                    } else if (pictureBox.Name == "1")
                    {
                        bestPoints[i] = 1;
                        i++;
                    }
                }
            }
            best3Label.Text = string.Join(",", bestPoints);
        }
    }
}
