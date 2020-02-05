<?php 
	
	function get_chaine($chaine, $debut, $fin){

	    $chaine = ' ' . $chaine;
	    $ini = strpos($chaine, $debut);
	    if ($ini == 0) return '';
	    $ini += strlen($debut);
	    $len = strpos($chaine, $fin, $ini) - $ini;
	    return substr($chaine, $ini, $len);

	}

	function generer_pdf() 
	{
		include ("MPDF/mpdf.php");

		$mpdf = new mPDF();

		$mpdf->SetImportUse();

		$pagecount = $mpdf->SetSourceFile('public/pdf/cv_nicolas_salaun.pdf');

		$tplId = $mpdf->ImportPage($pagecount);
		$mpdf->UseTemplate($tplId);

		// TODO: générer pdf à partir du code HTML

		date_default_timezone_set('Europe/Paris');
		$date_heure = date('d/m/Y - H:i:s',time());
		$mpdf->WriteFixedPosHTML($date_heure, 12, 285, 60, 10);
		$mpdf->Output();
		exit();
	}

 ?>