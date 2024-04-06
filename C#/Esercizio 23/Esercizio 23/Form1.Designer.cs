namespace Esercizio_23
{
    partial class Esercizio23
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
            InputStazioni = new TextBox();
            Valida = new Button();
            label1 = new Label();
            ValidaLabel = new Label();
            SuspendLayout();
            // 
            // InputStazioni
            // 
            InputStazioni.Location = new Point(265, 200);
            InputStazioni.Name = "InputStazioni";
            InputStazioni.Size = new Size(281, 23);
            InputStazioni.TabIndex = 0;
            // 
            // Valida
            // 
            Valida.Location = new Point(360, 229);
            Valida.Name = "Valida";
            Valida.Size = new Size(75, 23);
            Valida.TabIndex = 1;
            Valida.Text = "Valida";
            Valida.UseVisualStyleBackColor = true;
            Valida.Click += Valida_Click;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(142, 153);
            label1.Name = "label1";
            label1.Size = new Size(552, 15);
            label1.TabIndex = 2;
            label1.Text = "Inserire una stringa composta da numeri, fino a 9 partendo da 0, separati da una virgola (0, 1, 2, 3, 4, 3..) ";
            // 
            // ValidaLabel
            // 
            ValidaLabel.AutoSize = true;
            ValidaLabel.Location = new Point(383, 269);
            ValidaLabel.Name = "ValidaLabel";
            ValidaLabel.Size = new Size(0, 15);
            ValidaLabel.TabIndex = 3;
            // 
            // Esercizio23
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(ValidaLabel);
            Controls.Add(label1);
            Controls.Add(Valida);
            Controls.Add(InputStazioni);
            Name = "Esercizio23";
            Text = "Esercizio 23";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox InputStazioni;
        private Button Valida;
        private Label label1;
        private Label ValidaLabel;
    }
}