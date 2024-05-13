namespace gioco3Carte
{
    partial class Form1
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
            carta1 = new Button();
            carta2 = new Button();
            carta3 = new Button();
            winLoseButton = new Button();
            SuspendLayout();
            // 
            // carta1
            // 
            carta1.BackgroundImageLayout = ImageLayout.Zoom;
            carta1.Location = new Point(28, 26);
            carta1.Name = "carta1";
            carta1.Size = new Size(243, 396);
            carta1.TabIndex = 0;
            carta1.UseVisualStyleBackColor = true;
            carta1.Click += carta_Click;
            // 
            // carta2
            // 
            carta2.BackgroundImageLayout = ImageLayout.Zoom;
            carta2.Location = new Point(279, 27);
            carta2.Name = "carta2";
            carta2.Size = new Size(243, 396);
            carta2.TabIndex = 1;
            carta2.UseVisualStyleBackColor = true;
            carta2.Click += carta_Click;
            // 
            // carta3
            // 
            carta3.BackgroundImageLayout = ImageLayout.Zoom;
            carta3.Location = new Point(528, 27);
            carta3.Name = "carta3";
            carta3.Size = new Size(243, 396);
            carta3.TabIndex = 2;
            carta3.UseVisualStyleBackColor = true;
            carta3.Click += carta_Click;
            // 
            // winLoseButton
            // 
            winLoseButton.Font = new Font("Bahnschrift", 11.25F, FontStyle.Regular, GraphicsUnit.Point);
            winLoseButton.Location = new Point(328, 446);
            winLoseButton.Name = "winLoseButton";
            winLoseButton.Size = new Size(146, 76);
            winLoseButton.TabIndex = 3;
            winLoseButton.Text = "Rigioca";
            winLoseButton.UseVisualStyleBackColor = true;
            winLoseButton.Visible = false;
            winLoseButton.Click += winLoseButton_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 546);
            Controls.Add(winLoseButton);
            Controls.Add(carta3);
            Controls.Add(carta2);
            Controls.Add(carta1);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ResumeLayout(false);
        }

        #endregion
        private Button carta1;
        private Button carta2;
        private Button carta3;
        private Button winLoseButton;
    }
}