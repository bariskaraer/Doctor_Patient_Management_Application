<?php
 session_start();
	// resmimizi oluşturuyoruz
	$resim=imagecreatetruecolor(36,18);
	// resmimizi boyayacağımız rengi oluşturuyoruz
	
	$renk = imagecolorallocate($resim, 255,255,255); //Beyaz Renk 
	
	// resmimizi boyuyoruz
	imagefill($resim, 0,0, $renk);
	// yazı rengimizi belirtiyoruz
	$yaziRengi = imagecolorallocate($resim, 0,0,0);
	// yazımızı resmin üstüne yazıyoruz
	imagestring($resim, 5, 0, 0, $_SESSION['rand'], $yaziRengi);
	
	// tarayıcıya dosyamızı algılaması için direktif veriyoruz
	header('Content-type: image/png');
	// ve sonucu çıktılıyoruz
	imagepng($resim);
	imagedestroy($resim);
	
$_SESSION['rand']=null;
unset($_SESSION['rand']);
?>