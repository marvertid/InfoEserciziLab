namespace Esercizio_34
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
            components = new System.ComponentModel.Container();
            trackBar1 = new TrackBar();
            temperaturaLab = new Label();
            tempLabel = new Label();
            statoLabel = new Label();
            misuraButton = new Button();
            timer = new System.Windows.Forms.Timer(components);
            invis = new Label();
            ((System.ComponentModel.ISupportInitialize)trackBar1).BeginInit();
            SuspendLayout();
            // 
            // trackBar1
            // 
            trackBar1.Location = new Point(38, 62);
            trackBar1.Maximum = 41;
            trackBar1.Minimum = 35;
            trackBar1.Name = "trackBar1";
            trackBar1.Orientation = Orientation.Vertical;
            trackBar1.Size = new Size(45, 368);
            trackBar1.TabIndex = 0;
            trackBar1.Value = 35;
            // 
            // temperaturaLab
            // 
            temperaturaLab.AutoSize = true;
            temperaturaLab.Font = new Font("Bahnschrift", 12F, FontStyle.Regular, GraphicsUnit.Point);
            temperaturaLab.Location = new Point(12, 21);
            temperaturaLab.Name = "temperaturaLab";
            temperaturaLab.Size = new Size(103, 19);
            temperaturaLab.TabIndex = 1;
            temperaturaLab.Text = "Temperatura";
            // 
            // tempLabel
            // 
            tempLabel.AutoSize = true;
            tempLabel.Font = new Font("Segoe UI", 11.25F, FontStyle.Regular, GraphicsUnit.Point);
            tempLabel.Location = new Point(121, 20);
            tempLabel.Name = "tempLabel";
            tempLabel.Size = new Size(50, 20);
            tempLabel.TabIndex = 2;
            tempLabel.Text = "label2";
            // 
            // statoLabel
            // 
            statoLabel.AutoSize = true;
            statoLabel.Font = new Font("Bahnschrift", 11.25F, FontStyle.Regular, GraphicsUnit.Point);
            statoLabel.Location = new Point(35, 458);
            statoLabel.Name = "statoLabel";
            statoLabel.Size = new Size(48, 18);
            statoLabel.TabIndex = 3;
            statoLabel.Text = "label3";
            // 
            // misuraButton
            // 
            misuraButton.Location = new Point(153, 209);
            misuraButton.Name = "misuraButton";
            misuraButton.Size = new Size(96, 61);
            misuraButton.TabIndex = 4;
            misuraButton.Text = "Misura";
            misuraButton.UseVisualStyleBackColor = true;
            misuraButton.Click += misuraButton_Click;
            // 
            // timer
            // 
            timer.Interval = 10000;
            timer.Tick += timer_Tick;
            // 
            // invis
            // 
            invis.AutoSize = true;
            invis.Location = new Point(211, 90);
            invis.Name = "invis";
            invis.Size = new Size(38, 15);
            invis.TabIndex = 5;
            invis.Text = "label1";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(270, 501);
            Controls.Add(invis);
            Controls.Add(misuraButton);
            Controls.Add(statoLabel);
            Controls.Add(tempLabel);
            Controls.Add(temperaturaLab);
            Controls.Add(trackBar1);
            Name = "Form1";
            Text = "Termometro";
            Load += Form1_Load;
            ((System.ComponentModel.ISupportInitialize)trackBar1).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TrackBar trackBar1;
        private Label temperaturaLab;
        private Label tempLabel;
        private Label statoLabel;
        private Button misuraButton;
        private System.Windows.Forms.Timer timer;
        private Label invis;
    }
}