namespace Esericizio_30
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
            select = new GroupBox();
            wcf = new CheckBox();
            jQuery = new CheckBox();
            mvc = new CheckBox();
            aspNet = new CheckBox();
            selectAll = new CheckBox();
            select.SuspendLayout();
            SuspendLayout();
            // 
            // select
            // 
            select.Controls.Add(wcf);
            select.Controls.Add(jQuery);
            select.Controls.Add(mvc);
            select.Controls.Add(aspNet);
            select.Controls.Add(selectAll);
            select.Location = new Point(248, 132);
            select.Name = "select";
            select.Size = new Size(277, 166);
            select.TabIndex = 0;
            select.TabStop = false;
            select.Text = "Select your technical skill";
            // 
            // wcf
            // 
            wcf.AutoSize = true;
            wcf.Location = new Point(138, 101);
            wcf.Name = "wcf";
            wcf.Size = new Size(51, 19);
            wcf.TabIndex = 4;
            wcf.Text = "WCF";
            wcf.UseVisualStyleBackColor = true;
            wcf.CheckedChanged += checkBox_CheckedChanged;
            // 
            // jQuery
            // 
            jQuery.AutoSize = true;
            jQuery.Location = new Point(49, 101);
            jQuery.Name = "jQuery";
            jQuery.Size = new Size(61, 19);
            jQuery.TabIndex = 3;
            jQuery.Text = "jQuery";
            jQuery.UseVisualStyleBackColor = true;
            jQuery.CheckedChanged += checkBox_CheckedChanged;
            // 
            // mvc
            // 
            mvc.AutoSize = true;
            mvc.Location = new Point(138, 76);
            mvc.Name = "mvc";
            mvc.Size = new Size(52, 19);
            mvc.TabIndex = 2;
            mvc.Text = "MVC";
            mvc.UseVisualStyleBackColor = true;
            mvc.CheckedChanged += checkBox_CheckedChanged;
            // 
            // aspNet
            // 
            aspNet.AutoSize = true;
            aspNet.Location = new Point(49, 76);
            aspNet.Name = "aspNet";
            aspNet.Size = new Size(68, 19);
            aspNet.TabIndex = 1;
            aspNet.Text = "Asp.Net";
            aspNet.UseVisualStyleBackColor = true;
            aspNet.CheckedChanged += checkBox_CheckedChanged;
            // 
            // selectAll
            // 
            selectAll.AutoSize = true;
            selectAll.Location = new Point(35, 49);
            selectAll.Name = "selectAll";
            selectAll.Size = new Size(74, 19);
            selectAll.TabIndex = 0;
            selectAll.Text = "Select All";
            selectAll.UseVisualStyleBackColor = true;
            selectAll.CheckedChanged += checkBox_CheckedChanged;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(select);
            Name = "Form1";
            Text = "Esercizio 30";
            select.ResumeLayout(false);
            select.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private GroupBox select;
        private CheckBox wcf;
        private CheckBox jQuery;
        private CheckBox mvc;
        private CheckBox aspNet;
        private CheckBox selectAll;
    }
}