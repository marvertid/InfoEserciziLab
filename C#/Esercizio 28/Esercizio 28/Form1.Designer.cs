namespace Esercizio_28
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
            title = new Label();
            nameSurnameInput = new TextBox();
            nameSurname = new Label();
            sex = new Label();
            sexInput = new TextBox();
            eyesColorPicker = new ComboBox();
            eyesColor = new Label();
            heightCheck = new CheckBox();
            weightCheck = new CheckBox();
            athleticDescInput = new TextBox();
            button1 = new Button();
            athleticDesc = new Label();
            fileSaveCheck = new Label();
            SuspendLayout();
            // 
            // title
            // 
            title.AutoSize = true;
            title.Font = new Font("Bahnschrift SemiCondensed", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            title.Location = new Point(27, 21);
            title.Name = "title";
            title.Size = new Size(151, 23);
            title.TabIndex = 0;
            title.Text = "Profilazione Utente";
            // 
            // nameSurnameInput
            // 
            nameSurnameInput.Location = new Point(33, 82);
            nameSurnameInput.Name = "nameSurnameInput";
            nameSurnameInput.Size = new Size(100, 23);
            nameSurnameInput.TabIndex = 1;
            // 
            // nameSurname
            // 
            nameSurname.AutoSize = true;
            nameSurname.Location = new Point(32, 64);
            nameSurname.Name = "nameSurname";
            nameSurname.Size = new Size(108, 15);
            nameSurname.TabIndex = 2;
            nameSurname.Text = "Nome e Cognome:";
            // 
            // sex
            // 
            sex.AutoSize = true;
            sex.Location = new Point(159, 64);
            sex.Name = "sex";
            sex.Size = new Size(39, 15);
            sex.TabIndex = 4;
            sex.Text = "Sesso:";
            // 
            // sexInput
            // 
            sexInput.Location = new Point(160, 82);
            sexInput.Name = "sexInput";
            sexInput.Size = new Size(100, 23);
            sexInput.TabIndex = 3;
            // 
            // eyesColorPicker
            // 
            eyesColorPicker.FormattingEnabled = true;
            eyesColorPicker.Items.AddRange(new object[] { "Neri", "Castani", "Marroni", "Ambra", "Verdi", "Grigi", "Blu", "Azzurri", "Rossi" });
            eyesColorPicker.Location = new Point(34, 144);
            eyesColorPicker.Name = "eyesColorPicker";
            eyesColorPicker.Size = new Size(121, 23);
            eyesColorPicker.TabIndex = 6;
            // 
            // eyesColor
            // 
            eyesColor.AutoSize = true;
            eyesColor.Location = new Point(34, 126);
            eyesColor.Name = "eyesColor";
            eyesColor.Size = new Size(79, 15);
            eyesColor.TabIndex = 7;
            eyesColor.Text = "Colore Occhi:";
            // 
            // heightCheck
            // 
            heightCheck.AutoSize = true;
            heightCheck.Location = new Point(34, 196);
            heightCheck.Name = "heightCheck";
            heightCheck.Size = new Size(112, 19);
            heightCheck.TabIndex = 8;
            heightCheck.Text = "Altezza > 180cm";
            heightCheck.UseVisualStyleBackColor = true;
            // 
            // weightCheck
            // 
            weightCheck.AutoSize = true;
            weightCheck.Location = new Point(34, 233);
            weightCheck.Name = "weightCheck";
            weightCheck.Size = new Size(90, 19);
            weightCheck.TabIndex = 9;
            weightCheck.Text = "Peso > 90kg";
            weightCheck.UseVisualStyleBackColor = true;
            // 
            // athleticDescInput
            // 
            athleticDescInput.Location = new Point(32, 294);
            athleticDescInput.Multiline = true;
            athleticDescInput.Name = "athleticDescInput";
            athleticDescInput.Size = new Size(233, 86);
            athleticDescInput.TabIndex = 10;
            // 
            // button1
            // 
            button1.Font = new Font("Bahnschrift", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            button1.Location = new Point(546, 196);
            button1.Name = "button1";
            button1.Size = new Size(120, 39);
            button1.TabIndex = 11;
            button1.Text = "Submit";
            button1.UseVisualStyleBackColor = true;
            button1.Click += button1_Click;
            // 
            // athleticDesc
            // 
            athleticDesc.AutoSize = true;
            athleticDesc.Location = new Point(32, 276);
            athleticDesc.Name = "athleticDesc";
            athleticDesc.Size = new Size(168, 15);
            athleticDesc.TabIndex = 12;
            athleticDesc.Text = "Descrizione capacita' atletiche:";
            // 
            // fileSaveCheck
            // 
            fileSaveCheck.AutoSize = true;
            fileSaveCheck.Location = new Point(582, 252);
            fileSaveCheck.Name = "fileSaveCheck";
            fileSaveCheck.Size = new Size(38, 15);
            fileSaveCheck.TabIndex = 13;
            fileSaveCheck.Text = "label1";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(fileSaveCheck);
            Controls.Add(athleticDesc);
            Controls.Add(button1);
            Controls.Add(athleticDescInput);
            Controls.Add(weightCheck);
            Controls.Add(heightCheck);
            Controls.Add(eyesColor);
            Controls.Add(eyesColorPicker);
            Controls.Add(sex);
            Controls.Add(sexInput);
            Controls.Add(nameSurname);
            Controls.Add(nameSurnameInput);
            Controls.Add(title);
            Name = "Form1";
            Text = "Esercizio 28";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label title;
        private TextBox nameSurnameInput;
        private Label nameSurname;
        private Label sex;
        private TextBox sexInput;
        private ComboBox eyesColorPicker;
        private Label eyesColor;
        private CheckBox heightCheck;
        private CheckBox weightCheck;
        private TextBox athleticDescInput;
        private Button button1;
        private Label athleticDesc;
        private Label fileSaveCheck;
    }
}