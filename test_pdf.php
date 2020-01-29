<?php 

	// function get_string_between($string, $start, $end){

	//     $string = ' ' . $string;
	//     $ini = strpos($string, $start);
	//     if ($ini == 0) return '';
	//     $ini += strlen($start);
	//     $len = strpos($string, $end, $ini) - $ini;
	//     return substr($string, $ini, $len);
	// }
	// 	include ("MPDF/mpdf.php");

	// 	//$html = "<html><body>".strstr(file_get_contents('http://localhost/DevWeb/Projet/cv_SALAUN/cv_index.php'), "<div id='bloc_cv'>");

	// 	$html = "<div id='bloc_cv'>".get_string_between(file_get_contents('http://localhost/DevWeb/Projet/cv_SALAUN/cv_index.php'), "<div id='bloc_cv'>", "<div id='boutons'>");


	// 	$mpdf=new mPDF('', '', 10, '', 0, 0, 0, 0, 0, 0, '');

	// 	date_default_timezone_set('Europe/Paris');
 //    	$stylesheet = file_get_contents('public/css/styles_pdf.css');
 //      	$mpdf->WriteHTML($stylesheet, 1);
 //      	$mpdf->SetCreator("Nicolas SALAUN");
 //      	$mpdf->SetAuthor("Nicolas SALAUN");
 //      	$mpdf->SetFooter('|{DATE j-m-Y} - {DATE H:i:s}|');
 //      	$mpdf->WriteHTML($html, 0);
 //      	$mpdf->Output('CV_Nicolas_SALAUN.pdf', 'I');

	include ("MPDF/mpdf.php");

	$mpdf = new mPDF();

	$mpdf->SetImportUse();

	$pagecount = $mpdf->SetSourceFile('public/pdf/cv_nicolas_salaun.pdf');

	// Import the last page of the source PDF file
	$tplId = $mpdf->ImportPage($pagecount);
	$mpdf->UseTemplate($tplId);

	$mpdf->WriteHTML('Hello World');
	$mpdf->Output();

 ?>