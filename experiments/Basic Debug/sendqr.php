<?php

ini_set('display_errors','1');
ini_set('error_reporting', E_ALL);

//include qr library
require('phpqrcode/qrlib.php');
//include pdf creation library
require('dompdf/dompdf_config.inc.php');
// add php mailer library
require('phpmailer/class.phpmailer.php');
// Here's the argument from the client.
$address = $_POST['website'];
$email = $_POST['email'];

QRcode::png($address, 'qrcode.png');

//add image of qr code to html for pdf
$html =
  '<html><body>'.
  '<img src="qrcode.png">'.
  '</body></html>';

//new pdf instance
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$output = $dompdf->output();
//save contents of pdf to a file
file_put_contents('QRCode.pdf', $output);


/* HERES THE EMAIL PORTION */
$mail = new PHPMailer();

$mail->IsSendmail();

$body =  "<h1>Heres Your QR Code! (Sent from my mobile app!)</h1>";
$mail->AddReplyTo("tfost010@odu.edu","Tomasz Foster");
$mail->SetFrom("tfost010@odu.edu","Tomasz Foster");
$mail->AddAddress($email, "Steve");

$mail->Subject = "QR Test";
$mail->MsgHTML($body);

$mail->AddAttachment("QRCode.pdf");

if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message sent!";
}

//define email and send
?>