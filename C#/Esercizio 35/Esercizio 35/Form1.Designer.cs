namespace Esercizio_35
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
            startButton = new Button();
            marce = new TrackBar();
            label1 = new Label();
            giriLabel = new Label();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            label6 = new Label();
            label7 = new Label();
            timer1 = new System.Windows.Forms.Timer(components);
            ((System.ComponentModel.ISupportInitialize)marce).BeginInit();
            SuspendLayout();
            // 
            // startButton
            // 
            startButton.Location = new Point(333, 177);
            startButton.Name = "startButton";
            startButton.Size = new Size(111, 79);
            startButton.TabIndex = 0;
            startButton.Text = "AVVIA";
            startButton.UseVisualStyleBackColor = true;
            startButton.Click += startButton_Click;
            // 
            // marce
            // 
            marce.Location = new Point(297, 262);
            marce.Maximum = 6;
            marce.Minimum = 1;
            marce.Name = "marce";
            marce.Size = new Size(179, 45);
            marce.TabIndex = 1;
            marce.Value = 1;
            marce.Scroll += timer1_Tick;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(297, 139);
            label1.Name = "label1";
            label1.Size = new Size(28, 15);
            label1.TabIndex = 2;
            label1.Text = "Giri:";
            // 
            // giriLabel
            // 
            giriLabel.AutoSize = true;
            giriLabel.Location = new Point(331, 139);
            giriLabel.Name = "giriLabel";
            giriLabel.Size = new Size(38, 15);
            giriLabel.TabIndex = 3;
            giriLabel.Text = "label2";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(304, 292);
            label2.Name = "label2";
            label2.Size = new Size(13, 15);
            label2.TabIndex = 4;
            label2.Text = "1";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(333, 292);
            label3.Name = "label3";
            label3.Size = new Size(13, 15);
            label3.TabIndex = 5;
            label3.Text = "2";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(366, 292);
            label4.Name = "label4";
            label4.Size = new Size(13, 15);
            label4.TabIndex = 2;
            label4.Text = "3";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(396, 292);
            label5.Name = "label5";
            label5.Size = new Size(13, 15);
            label5.TabIndex = 6;
            label5.Text = "4";
            // 
            // label6
            // 
            label6.AutoSize = true;
            label6.Location = new Point(426, 292);
            label6.Name = "label6";
            label6.Size = new Size(13, 15);
            label6.TabIndex = 7;
            label6.Text = "5";
            // 
            // label7
            // 
            label7.AutoSize = true;
            label7.Location = new Point(456, 292);
            label7.Name = "label7";
            label7.Size = new Size(13, 15);
            label7.TabIndex = 8;
            label7.Text = "6";
            // 
            // timer1
            // 
            timer1.Interval = 15;
            timer1.Tick += timer1_Tick;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(label7);
            Controls.Add(label6);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(giriLabel);
            Controls.Add(label1);
            Controls.Add(marce);
            Controls.Add(startButton);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ((System.ComponentModel.ISupportInitialize)marce).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button startButton;
        private TrackBar marce;
        private Label label1;
        private Label giriLabel;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private Label label6;
        private Label label7;
        private System.Windows.Forms.Timer timer1;
    }
}