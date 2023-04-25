Q: Create a PDF that shows "hello world" using PHP and fpdf library

---

A: To create a PDF that shows "Hello World" using PHP and the FPDF library, follow these steps:

1.  First, make sure you have PHP installed on your system. If not, download and install it from [https://www.php.net/downloads.php](https://www.php.net/downloads.php).
    
2.  Next, download the FPDF library from [http://www.fpdf.org](http://www.fpdf.org). Extract the contents of the zip file to a folder named 'fpdf' in your project directory.
    
3.  Create a new PHP file (e.g., `hello_world_pdf.php`) in your project directory, and add the following code:
    

```php
<?php
// Load the FPDF library
require_once('fpdf/fpdf.php');

// Create a new PDF document
$pdf = new FPDF();

// Add a new page
$pdf->AddPage();

// Set the font for the text
$pdf->SetFont('Arial', 'B', 16);

// Set the text color
$pdf->SetTextColor(0, 0, 0);

// Print "Hello World" to the PDF
$pdf->Cell(0, 10, 'Hello World', 0, 1, 'C');

// Output the PDF to the browser
$pdf->Output();
?>
```

4.  Open your terminal or command prompt, navigate to your project directory, and start a local PHP server using the following command:

```
php -S localhost:8000
```

5.  Open your web browser and visit `http://localhost:8000/hello_world_pdf.php`. This should display a PDF document with the text "Hello World" in it.

Remember that the FPDF library must be present in your project directory, and the `require_once` statement must correctly point to the `fpdf.php` file. If you followed the steps as described, it should be in the 'fpdf' folder in your project directory.

---

