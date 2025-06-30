<?php 
require_once("../vendor/autoload.php");
use Dompdf\Dompdf;
class Pdf {
	function print($html, $filename = 'laporan') {
		$dompdf = new Dompdf();
		$dompdf->load_html($html);
		$dompdf->set_option('isRemoteEnabled', true);
		$dompdf->render();
		$dompdf->stream($filename.".pdf", ['Attachment'=> FALSE]);
	}
}
