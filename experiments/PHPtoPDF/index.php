<?php 

//error reporting
ini_set('display_errors','1');
ini_set('error_reporting', E_ALL);

//include fpdf
require('dompdf/dompdf_config.inc.php');
require('phpqrcode/qrlib.php');

//new pdf instance - tutorial on fpdf.org
$html =
  '<html><body>'.
  '<p><b>This</b> is Steves new favorite plugin '.
  'to convert html to a pdf. <em>Whoa!</em></p>'.
  '</body></html>';

/*$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");*/

QRcode::png('http://biologik.github.io', 'qrsample.png');

echo "We made it through!";


?>