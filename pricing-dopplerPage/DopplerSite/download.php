<?php
if ($_GET["ebook"]=="1"){
	$fichero = 'pdf/ebooks/Guia_HTML.pdf';
}
if ($_GET["ebook"]=="2"){	
	$fichero = 'pdf/ebooks/ABCEmailMarketing.pdf';
}
if ($_GET["ebook"]=="3"){	
	$fichero = 'pdf/ebooks/ebook_Brian_Massey.pdf';
}
if ($_GET["ebook"]=="i1"){	
	$fichero = 'pdf/infografias/10_Mandamientos_Social_Media.pdf';
}
header('Set-Cookie: fileDownload=true; path=/');
header('Cache-Control: max-age=60, must-revalidate');
header("Content-type: application/pdf");
header('Content-Disposition: attachment; filename='.basename($fichero));
header("Content-Length: " . filesize($fichero));
readfile($fichero);
?>