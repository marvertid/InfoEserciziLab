namespace Esercizio_21
{
    partial class Esercizio21
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Esercizio21));
            Incrementa = new Button();
            Diminuisci = new Button();
            Numero = new Label();
            RadiceNumero = new Label();
            labelRadice = new Label();
            SuspendLayout();
            // 
            // Incrementa
            // 
            Incrementa.Location = new Point(46, 146);
            Incrementa.Name = "Incrementa";
            Incrementa.Size = new Size(153, 72);
            Incrementa.TabIndex = 0;
            Incrementa.Text = "Aggiungi 1";
            Incrementa.UseVisualStyleBackColor = true;
            Incrementa.Click += Incrementa_Click;
            // 
            // Diminuisci
            // 
            Diminuisci.Location = new Point(589, 146);
            Diminuisci.Name = "Diminuisci";
            Diminuisci.Size = new Size(153, 72);
            Diminuisci.TabIndex = 1;
            Diminuisci.Text = "Diminuisci 1";
            Diminuisci.UseVisualStyleBackColor = true;
            Diminuisci.Click += Diminuisci_Click;
            // 
            // Numero
            // 
            Numero.AutoSize = true;
            Numero.Location = new Point(384, 175);
            Numero.Name = "Numero";
            Numero.Size = new Size(19, 15);
            Numero.TabIndex = 2;
            Numero.Text = "90";
            // 
            // RadiceNumero
            // 
            RadiceNumero.AutoSize = true;
            RadiceNumero.Location = new Point(384, 253);
            RadiceNumero.Name = "RadiceNumero";
            RadiceNumero.Size = new Size(0, 15);
            RadiceNumero.TabIndex = 4;
            RadiceNumero.Click += RadiceNumero_Click;
            // 
            // labelRadice
            // 
            labelRadice.AutoSize = true;
            labelRadice.Location = new Point(333, 253);
            labelRadice.Name = "labelRadice";
            labelRadice.Size = new Size(45, 15);
            labelRadice.TabIndex = 5;
            labelRadice.Text = "Radice:";
            // 
            // Esercizio21
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(labelRadice);
            Controls.Add(RadiceNumero);
            Controls.Add(Numero);
            Controls.Add(Diminuisci);
            Controls.Add(Incrementa);
            Icon = (Icon)resources.GetObject("$this.Icon");
            Name = "Esercizio21";
            Text = "Esercizio21";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button Incrementa;
        private Button Diminuisci;
        private Label Numero;
        private Label RadiceNumero;
        private Label labelRadice;
    }
}