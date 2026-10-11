
<?php

  # FPDF function - Library File
  require('./fpdf.php');

  #  http://www.fpdf.org/

  #  After including the library file, we create an FPDF object. 
  #    The constructor is used here with the default values: pages are in A4 portrait and the unit of measure is millimeter. 
  #    It could have been specified explicitly with:
  $pdf=new FPDF();

  #  AddPage(string orientation, mixed size, int rotation)
  #    Description
  #      Adds a new page to the document. 
  #  orientation
  #    Page orientation. Possible values are (case insensitive):
  #    P or Portrait
  #    L or Landscape
  #  The default value is the one passed to the constructor.
  # size
  #   Page size. It can be either one of the following values (case insensitive):
  #     A3
  #     A4
  #     A5
  #     Letter
  #     Legal
  #     or an array containing the width and the height (expressed in user unit).
  # rotation
  #   Angle by which to rotate the page. It must be a multiple of 90; positive values mean clockwise rotation. The default value is 0.
  $pdf->AddPage();

  # SetFont(string family, string style, float size)

  # Family font. It can be either a name defined by AddFont() or one of the standard families (case insensitive):
  #   Courier (fixed-width)
  #   Helvetica or Arial (synonymous; sans serif)
  #   Times (serif)
  #   Symbol (symbolic)
  #   ZapfDingbats (symbolic)

  # Font style. Possible values are (case insensitive):
  #   empty string: regular
  #   B: bold
  #   I: italic
  #   U: underline

  # Font size in points.
  #   The default value is the current size. If no size has been specified since the beginning of the document, the value taken is 12.
  $pdf->SetFont('Arial','B',16);
 
  # SetTextColor(int r, int g, int b)
  #   Description
  #   Defines the color used for text. It can be expressed in RGB components or gray scale. 
  #     The method can be called before the first page is created and the value is retained from page to page.
  #   Parameters
  # r - If g et b are given, red component; if not, indicates the gray level. Value between 0 and 255.
  # g - Green component (between 0 and 255).
  # b - Blue component (between 0 and 255).
  $pdf->SetTextColor(255, 0, 0);

  # We can now print a cell with Cell(). A cell is a rectangular area, possibly framed, which contains a line of text. 
  #   It is output at the current position. We specify its dimensions, its text (centered or aligned), if borders should be drawn, 
  #   and where the current position moves after it (to the right, below or to the beginning of the next line). 
  #   To add a frame, we would do this:
  #     $pdf->Cell(40,10,'Hello World !',1);
  $pdf->Cell(40,10,'Hello World!');

  # The line break can also be done with Ln(). 
  #   This method additionnaly allows to specify the height of the break.
  $pdf->ln();

  $pdf->SetFont('Arial','IBU',12);
  $pdf->SetTextColor(255, 0, 255);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Arial','IU',14);
  $pdf->SetTextColor(0, 0, 255);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Times','IU',20);
  $pdf->SetTextColor(0, 191, 255);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Courier','IU',16);
  $pdf->SetTextColor(255, 64, 0);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Symbol','U',14);
  $pdf->SetTextColor(255, 191, 0);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Symbol','B',12);
  $pdf->SetTextColor(0, 0, 0);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Arial','B',10);
  $pdf->SetTextColor(102, 102, 153);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  $pdf->SetFont('Courier','B',14);
  $pdf->SetTextColor(51, 153, 102);

  $pdf->MultiCell(0,5,'Hello World!Hello World!Hello World!Hello World! Hello World!Hello World!Hello World!Hello World! Hello World!Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! Hello World! ');


//  $pdf->Cell(40,10,'Hello World!');
  $pdf->ln();

  # Finally, the document is closed and sent to the browser with Output(). 
  #   We could have saved it to a file by passing the appropriate parameters.
  $pdf->Output();
?>
