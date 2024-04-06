namespace Esercizio_26
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
            passInput = new TextBox();
            text = new Label();
            showPass = new CheckBox();
            passVerifiedLabel = new Label();
            SuspendLayout();
            // 
            // passInput
            // 
            passInput.Location = new Point(227, 205);
            passInput.Name = "passInput";
            passInput.PasswordChar = '*';
            passInput.Size = new Size(309, 23);
            passInput.TabIndex = 0;
            passInput.KeyDown += passInput_KeyDown;
            // 
            // text
            // 
            text.AutoSize = true;
            text.Font = new Font("Bahnschrift SemiCondensed", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            text.Location = new Point(199, 162);
            text.Name = "text";
            text.Size = new Size(383, 23);
            text.TabIndex = 1;
            text.Text = "Per continuare innanzitutto, verifica la tua identita`";
            // 
            // showPass
            // 
            showPass.AutoSize = true;
            showPass.Location = new Point(227, 249);
            showPass.Name = "showPass";
            showPass.Size = new Size(116, 19);
            showPass.TabIndex = 2;
            showPass.Text = "Mostra password";
            showPass.UseVisualStyleBackColor = true;
            showPass.CheckedChanged += showPass_CheckedChanged;
            // 
            // passVerifiedLabel
            // 
            passVerifiedLabel.AutoSize = true;
            passVerifiedLabel.Location = new Point(461, 253);
            passVerifiedLabel.Name = "passVerifiedLabel";
            passVerifiedLabel.Size = new Size(38, 15);
            passVerifiedLabel.TabIndex = 3;
            passVerifiedLabel.Text = "label1";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(passVerifiedLabel);
            Controls.Add(showPass);
            Controls.Add(text);
            Controls.Add(passInput);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox passInput;
        private Label text;
        private CheckBox showPass;
        private Label passVerifiedLabel;
    }
}