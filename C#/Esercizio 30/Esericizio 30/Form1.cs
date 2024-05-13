namespace Esericizio_30
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void checkBox_CheckedChanged(object sender, EventArgs e)
        {
            if (sender != selectAll)
            {
                if (aspNet.Checked && mvc.Checked && jQuery.Checked && wcf.Checked)
                {
                    selectAll.Checked = true;
                }
                else
                {
                    selectAll.Checked = false;
                }
            } else
            {
                if (selectAll.Checked)
                {
                    aspNet.Checked = true;
                    mvc.Checked = true;
                    jQuery.Checked = true;
                    wcf.Checked = true;
                    aspNet.Checked = true;
                } else
                {
                    aspNet.Checked = false;
                    mvc.Checked = false;
                    jQuery.Checked = false;
                    wcf.Checked = false;
                }
            }

        }
    }
}