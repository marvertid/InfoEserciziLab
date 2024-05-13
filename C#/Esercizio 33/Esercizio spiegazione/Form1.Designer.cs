namespace Esercizio_spiegazione
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
            fornoLabel = new Label();
            fornoStatusLabel = new Label();
            label1 = new Label();
            tempNumeric = new NumericUpDown();
            tempTrackBar = new TrackBar();
            tempoLabel = new Label();
            timeNumeric = new NumericUpDown();
            timeTrackbar = new TrackBar();
            startButton = new Button();
            fornoTimer = new System.Windows.Forms.Timer(components);
            ((System.ComponentModel.ISupportInitialize)tempNumeric).BeginInit();
            ((System.ComponentModel.ISupportInitialize)tempTrackBar).BeginInit();
            ((System.ComponentModel.ISupportInitialize)timeNumeric).BeginInit();
            ((System.ComponentModel.ISupportInitialize)timeTrackbar).BeginInit();
            SuspendLayout();
            // 
            // fornoLabel
            // 
            fornoLabel.AutoSize = true;
            fornoLabel.Font = new Font("Segoe UI", 9F, FontStyle.Bold, GraphicsUnit.Point);
            fornoLabel.Location = new Point(12, 9);
            fornoLabel.Name = "fornoLabel";
            fornoLabel.Size = new Size(39, 15);
            fornoLabel.TabIndex = 0;
            fornoLabel.Text = "Forno";
            // 
            // fornoStatusLabel
            // 
            fornoStatusLabel.AutoSize = true;
            fornoStatusLabel.Location = new Point(255, 9);
            fornoStatusLabel.Name = "fornoStatusLabel";
            fornoStatusLabel.Size = new Size(44, 15);
            fornoStatusLabel.TabIndex = 1;
            fornoStatusLabel.Text = "Spento";
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(13, 49);
            label1.Name = "label1";
            label1.Size = new Size(76, 15);
            label1.TabIndex = 2;
            label1.Text = "Temperatura:";
            // 
            // tempNumeric
            // 
            tempNumeric.Location = new Point(145, 47);
            tempNumeric.Maximum = new decimal(new int[] { 250, 0, 0, 0 });
            tempNumeric.Minimum = new decimal(new int[] { 100, 0, 0, 0 });
            tempNumeric.Name = "tempNumeric";
            tempNumeric.Size = new Size(120, 23);
            tempNumeric.TabIndex = 3;
            tempNumeric.Value = new decimal(new int[] { 100, 0, 0, 0 });
            tempNumeric.ValueChanged += tempNumeric_ValueChanged;
            // 
            // tempTrackBar
            // 
            tempTrackBar.LargeChange = 20;
            tempTrackBar.Location = new Point(13, 88);
            tempTrackBar.Maximum = 250;
            tempTrackBar.Minimum = 100;
            tempTrackBar.Name = "tempTrackBar";
            tempTrackBar.Size = new Size(280, 45);
            tempTrackBar.SmallChange = 10;
            tempTrackBar.TabIndex = 4;
            tempTrackBar.TickFrequency = 10;
            tempTrackBar.Value = 100;
            tempTrackBar.ValueChanged += tempTrackBar_ValueChanged;
            // 
            // tempoLabel
            // 
            tempoLabel.AutoSize = true;
            tempoLabel.Location = new Point(13, 148);
            tempoLabel.Name = "tempoLabel";
            tempoLabel.Size = new Size(100, 15);
            tempoLabel.TabIndex = 5;
            tempoLabel.Text = "Tempo di cottura:";
            // 
            // timeNumeric
            // 
            timeNumeric.Location = new Point(145, 146);
            timeNumeric.Maximum = new decimal(new int[] { 120, 0, 0, 0 });
            timeNumeric.Name = "timeNumeric";
            timeNumeric.Size = new Size(120, 23);
            timeNumeric.TabIndex = 6;
            timeNumeric.ValueChanged += timeNumeric_ValueChanged;
            // 
            // timeTrackbar
            // 
            timeTrackbar.Location = new Point(13, 180);
            timeTrackbar.Maximum = 120;
            timeTrackbar.Name = "timeTrackbar";
            timeTrackbar.Size = new Size(280, 45);
            timeTrackbar.TabIndex = 7;
            timeTrackbar.TickFrequency = 5;
            timeTrackbar.ValueChanged += timeTrackbar_ValueChanged;
            // 
            // startButton
            // 
            startButton.Location = new Point(72, 264);
            startButton.Name = "startButton";
            startButton.Size = new Size(145, 71);
            startButton.TabIndex = 8;
            startButton.Text = "Avvia";
            startButton.UseVisualStyleBackColor = true;
            startButton.Click += startButton_Click;
            // 
            // fornoTimer
            // 
            fornoTimer.Tick += fornoTimer_Tick;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(304, 382);
            Controls.Add(startButton);
            Controls.Add(timeTrackbar);
            Controls.Add(timeNumeric);
            Controls.Add(tempoLabel);
            Controls.Add(tempTrackBar);
            Controls.Add(tempNumeric);
            Controls.Add(label1);
            Controls.Add(fornoStatusLabel);
            Controls.Add(fornoLabel);
            Name = "Form1";
            Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)tempNumeric).EndInit();
            ((System.ComponentModel.ISupportInitialize)tempTrackBar).EndInit();
            ((System.ComponentModel.ISupportInitialize)timeNumeric).EndInit();
            ((System.ComponentModel.ISupportInitialize)timeTrackbar).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label fornoLabel;
        private Label fornoStatusLabel;
        private Label label1;
        private NumericUpDown tempNumeric;
        private TrackBar tempTrackBar;
        private Label tempoLabel;
        private NumericUpDown timeNumeric;
        private TrackBar timeTrackbar;
        private Button startButton;
        private System.Windows.Forms.Timer fornoTimer;
    }
}