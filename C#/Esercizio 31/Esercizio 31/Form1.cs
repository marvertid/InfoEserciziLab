using System;
using System.Text.Json;
using System.Text.Json.Nodes;

namespace Esercizio_31
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            LoadJson();
            
        }

        public void LoadJson()
        {
            using (StreamReader r = new StreamReader("gi_comuni.json"))
            {
                List<string> source = new List<string>();
                string json = r.ReadToEnd();
                source = JsonSerializer.Deserialize<List<String>>(json);
            }
        }



    }
}