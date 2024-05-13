namespace Esercizio_31
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
            nameSurname = new GroupBox();
            textBox1 = new TextBox();
            regioneCB = new ComboBox();
            regionSelect = new GroupBox();
            provinceSelect = new GroupBox();
            provinceCB = new ComboBox();
            comuniSelect = new GroupBox();
            comuniCB = new ComboBox();
            button1 = new Button();
            nameSurname.SuspendLayout();
            regionSelect.SuspendLayout();
            provinceSelect.SuspendLayout();
            comuniSelect.SuspendLayout();
            SuspendLayout();
            // 
            // title
            // 
            title.AutoSize = true;
            title.Font = new Font("Bahnschrift", 20.25F, FontStyle.Bold, GraphicsUnit.Point);
            title.Location = new Point(189, 9);
            title.Name = "title";
            title.Size = new Size(373, 33);
            title.TabIndex = 0;
            title.Text = "INFORMAZIONI RESIDENZIALI";
            title.TextAlign = ContentAlignment.MiddleCenter;
            // 
            // nameSurname
            // 
            nameSurname.Controls.Add(textBox1);
            nameSurname.Location = new Point(25, 67);
            nameSurname.Name = "nameSurname";
            nameSurname.Size = new Size(180, 89);
            nameSurname.TabIndex = 1;
            nameSurname.TabStop = false;
            nameSurname.Text = "Nome e cognome";
            // 
            // textBox1
            // 
            textBox1.Location = new Point(26, 38);
            textBox1.Name = "textBox1";
            textBox1.Size = new Size(125, 23);
            textBox1.TabIndex = 2;
            // 
            // regioneCB
            // 
            regioneCB.DropDownStyle = ComboBoxStyle.DropDownList;
            regioneCB.FormattingEnabled = true;
            regioneCB.Location = new Point(35, 43);
            regioneCB.Name = "regioneCB";
            regioneCB.Size = new Size(121, 23);
            regioneCB.TabIndex = 2;
            // 
            // regionSelect
            // 
            regionSelect.Controls.Add(regioneCB);
            regionSelect.Location = new Point(25, 199);
            regionSelect.Name = "regionSelect";
            regionSelect.Size = new Size(200, 100);
            regionSelect.TabIndex = 3;
            regionSelect.TabStop = false;
            regionSelect.Text = "Regione";
            // 
            // provinceSelect
            // 
            provinceSelect.Controls.Add(provinceCB);
            provinceSelect.Location = new Point(248, 199);
            provinceSelect.Name = "provinceSelect";
            provinceSelect.Size = new Size(200, 100);
            provinceSelect.TabIndex = 4;
            provinceSelect.TabStop = false;
            provinceSelect.Text = "Provincia";
            // 
            // provinceCB
            // 
            provinceCB.DropDownStyle = ComboBoxStyle.DropDownList;
            provinceCB.FormattingEnabled = true;
            provinceCB.Location = new Point(35, 43);
            provinceCB.Name = "provinceCB";
            provinceCB.Size = new Size(121, 23);
            provinceCB.TabIndex = 2;
            // 
            // comuniSelect
            // 
            comuniSelect.Controls.Add(comuniCB);
            comuniSelect.Location = new Point(472, 199);
            comuniSelect.Name = "comuniSelect";
            comuniSelect.Size = new Size(200, 100);
            comuniSelect.TabIndex = 5;
            comuniSelect.TabStop = false;
            comuniSelect.Text = "Comune";
            // 
            // comuniCB
            // 
            comuniCB.DropDownStyle = ComboBoxStyle.DropDownList;
            comuniCB.FormattingEnabled = true;
            comuniCB.Location = new Point(35, 43);
            comuniCB.Name = "comuniCB";
            comuniCB.Size = new Size(121, 23);
            comuniCB.TabIndex = 2;
            // 
            // button1
            // 
            button1.Font = new Font("Bahnschrift", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            button1.Location = new Point(599, 358);
            button1.Name = "button1";
            button1.Size = new Size(169, 60);
            button1.TabIndex = 6;
            button1.Text = "Invia";
            button1.UseVisualStyleBackColor = true;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(button1);
            Controls.Add(comuniSelect);
            Controls.Add(provinceSelect);
            Controls.Add(regionSelect);
            Controls.Add(nameSurname);
            Controls.Add(title);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            nameSurname.ResumeLayout(false);
            nameSurname.PerformLayout();
            regionSelect.ResumeLayout(false);
            provinceSelect.ResumeLayout(false);
            comuniSelect.ResumeLayout(false);
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label title;
        private GroupBox nameSurname;
        private TextBox textBox1;
        private ComboBox regioneCB;
        private GroupBox regionSelect;
        private GroupBox provinceSelect;
        private ComboBox provinceCB;
        private GroupBox comuniSelect;
        private ComboBox comuniCB;
        private Button button1;
    }
}