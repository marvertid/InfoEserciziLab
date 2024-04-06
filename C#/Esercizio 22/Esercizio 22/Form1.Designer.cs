namespace Esercizio_22
{
    partial class Esercizio22
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            Testo = new TextBox();
            ConteggioParole = new Label();
            SuspendLayout();
            // 
            // Testo
            // 
            Testo.Location = new Point(141, 169);
            Testo.Multiline = true;
            Testo.Name = "Testo";
            Testo.ScrollBars = ScrollBars.Vertical;
            Testo.Size = new Size(537, 113);
            Testo.TabIndex = 0;
            Testo.TextChanged += Testo_TextChanged;
            // 
            // ConteggioParole
            // 
            ConteggioParole.AutoSize = true;
            ConteggioParole.Location = new Point(374, 322);
            ConteggioParole.Name = "ConteggioParole";
            ConteggioParole.Size = new Size(13, 15);
            ConteggioParole.TabIndex = 1;
            ConteggioParole.Text = "0";
            // 
            // Esercizio22
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(ConteggioParole);
            Controls.Add(Testo);
            Name = "Esercizio22";
            Text = "Esercizio22";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox Testo;
        private Label ConteggioParole;
    }
}