namespace Esercizio_26
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void showPass_CheckedChanged(object sender, EventArgs e)
        {
            if (showPass.Checked)
            {
                passInput.PasswordChar = '\0';
            }
            else
            {
                passInput.PasswordChar = '*';
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            passVerifiedLabel.Text = String.Empty;
        }

        private void passInput_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.Enter)
            {
                if (passInput.Text == "supersecretpassword")
                {
                    passVerifiedLabel.ForeColor = Color.Green;
                    passVerifiedLabel.Text = "OK";
                }
                else
                {
                    passVerifiedLabel.Text = "NO";
                    passVerifiedLabel.ForeColor = Color.Red;
                }
            }
        }
    }
}