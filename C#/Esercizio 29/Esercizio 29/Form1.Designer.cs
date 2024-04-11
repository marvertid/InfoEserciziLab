namespace Esercizio_29
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
            wordList = new TextBox();
            searchButton = new Button();
            userChoice = new GroupBox();
            doubleConsonant = new RadioButton();
            greater5Char = new RadioButton();
            endAccent = new RadioButton();
            startsVocal = new RadioButton();
            userChoice.SuspendLayout();
            SuspendLayout();
            // 
            // wordList
            // 
            wordList.Font = new Font("Bahnschrift SemiCondensed", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            wordList.Location = new Point(31, 26);
            wordList.Multiline = true;
            wordList.Name = "wordList";
            wordList.ReadOnly = true;
            wordList.ScrollBars = ScrollBars.Vertical;
            wordList.Size = new Size(177, 412);
            wordList.TabIndex = 0;
            // 
            // searchButton
            // 
            searchButton.Font = new Font("Bahnschrift", 18F, FontStyle.Regular, GraphicsUnit.Point);
            searchButton.Location = new Point(539, 192);
            searchButton.Name = "searchButton";
            searchButton.Size = new Size(136, 66);
            searchButton.TabIndex = 1;
            searchButton.Text = "Cerca";
            searchButton.UseVisualStyleBackColor = true;
            searchButton.Click += button1_Click;
            // 
            // userChoice
            // 
            userChoice.Controls.Add(doubleConsonant);
            userChoice.Controls.Add(greater5Char);
            userChoice.Controls.Add(endAccent);
            userChoice.Controls.Add(startsVocal);
            userChoice.Location = new Point(236, 156);
            userChoice.Name = "userChoice";
            userChoice.Size = new Size(252, 145);
            userChoice.TabIndex = 2;
            userChoice.TabStop = false;
            userChoice.Text = "Scelta";
            // 
            // doubleConsonant
            // 
            doubleConsonant.AutoSize = true;
            doubleConsonant.Location = new Point(19, 101);
            doubleConsonant.Name = "doubleConsonant";
            doubleConsonant.Size = new Size(129, 19);
            doubleConsonant.TabIndex = 3;
            doubleConsonant.TabStop = true;
            doubleConsonant.Text = "Consonante doppia";
            doubleConsonant.UseVisualStyleBackColor = true;
            // 
            // greater5Char
            // 
            greater5Char.AutoSize = true;
            greater5Char.Location = new Point(19, 76);
            greater5Char.Name = "greater5Char";
            greater5Char.Size = new Size(96, 19);
            greater5Char.TabIndex = 2;
            greater5Char.TabStop = true;
            greater5Char.Text = ">= 5 caratteri";
            greater5Char.UseVisualStyleBackColor = true;
            // 
            // endAccent
            // 
            endAccent.AutoSize = true;
            endAccent.Location = new Point(19, 51);
            endAccent.Name = "endAccent";
            endAccent.Size = new Size(180, 19);
            endAccent.TabIndex = 1;
            endAccent.TabStop = true;
            endAccent.Text = "Termina con lettera accentata";
            endAccent.UseVisualStyleBackColor = true;
            // 
            // startsVocal
            // 
            startsVocal.AutoSize = true;
            startsVocal.Location = new Point(19, 26);
            startsVocal.Name = "startsVocal";
            startsVocal.Size = new Size(112, 19);
            startsVocal.TabIndex = 0;
            startsVocal.TabStop = true;
            startsVocal.Text = "Inizia con vocale";
            startsVocal.UseVisualStyleBackColor = true;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(userChoice);
            Controls.Add(searchButton);
            Controls.Add(wordList);
            Name = "Form1";
            Text = "Esercizio 29";
            userChoice.ResumeLayout(false);
            userChoice.PerformLayout();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox wordList;
        private Button searchButton;
        private GroupBox userChoice;
        private RadioButton doubleConsonant;
        private RadioButton greater5Char;
        private RadioButton endAccent;
        private RadioButton startsVocal;
    }
}