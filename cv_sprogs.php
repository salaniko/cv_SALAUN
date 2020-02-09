<?php 
	
	function get_chaine($chaine, $debut, $fin){

	    $chaine = ' ' . $chaine;
	    $ini = strpos($chaine, $debut);
	    if ($ini == 0) return '';
	    $ini += strlen($debut);
	    $len = strpos($chaine, $fin, $ini) - $ini;
	    return substr($chaine, $ini, $len);

	}

	function generer_pdf($url) 
	{
		include ("MPDF/mpdf.php");

		$mpdf = new mPDF();

		$mpdf->SetDefaultBodyCSS('font-size', '12');
		$mpdf->SetDefaultBodyCSS('font-family', 'Open Sans');

		$html = file_get_contents($url);

		$portrait = "<img src='public/images/portrait.png'/>";
		$partie_gauche_html = get_chaine($html, "<div class='infos' id='infos_personnelles'>", "<h1>Nicolas Salaün</h1>");
		$partie_droite_haut_html = get_chaine($html, "<td align='left'  colspan='2' id='partie_droite'>", "<div id='bloc_formations_competences'>");
		$partie_droite_bas_html = get_chaine($html, "<div id='bloc_formations_competences'>", "<div id='boutons'>");

		date_default_timezone_set('Europe/Paris');

		$mpdf->WriteFixedPosHTML($portrait, 5, 5, 50, 50);
		$mpdf->SetDefaultBodyCSS('line-height', '1.3');
		$mpdf->WriteFixedPosHTML($partie_gauche_html, 7, 55, 50, 200);
		$mpdf->SetDefaultBodyCSS('line-height', '2');
		$mpdf->WriteFixedPosHTML($partie_droite_haut_html, 70, 5, 135, 150);
		$mpdf->WriteFixedPosHTML($partie_droite_bas_html, 70, 215, 135, 75);

		$mpdf->SetTitle("CV de Nicolas SALAÜN");
		$mpdf->SetCreator("Nicolas SALAÜN");
    	$mpdf->SetAuthor("Nicolas SALAÜN");
		$mpdf->SetFooter('|{DATE j-m-Y} - {DATE H:i:s}|');


		$mpdf->Output("cv_nicolas_salaun.pdf", "I");
		exit();
	}

 ?>