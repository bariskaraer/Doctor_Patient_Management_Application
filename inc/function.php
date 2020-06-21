<?php
function sayfala($p, $sayfaAdet, $urlPage)
{
	if ($sayfaAdet<=10)
	{
		$i=1;
		$forAdet=$sayfaAdet;
	}
	else
	{
		if ($p<5)
		{
			$i=1;
			$forAdet=10;
		}
		else{
				if ($sayfaAdet>=($p+5))
				{
					$i=$p-4;
					$forAdet=$i+9;
				}
				else
				{
					$i=$sayfaAdet-9;
					$forAdet=$sayfaAdet;
				}
			}
	}
		echo '<div class="page"><ul>';
		if ($p>1){echo '<li><a href="'.$urlPage.($p-1).'">Geri</a></li>';}
		if ($p>5){echo '<li><a href="'.$urlPage.'1">İlk Sayfa</a></li>';}
		for ($i; $i<=$forAdet; $i++)
		{
			if ($i==$p){echo '<li class="selected">';}
			else {echo '<li>';}
			echo '<a href="'.$urlPage.$i.'">'.$i.'</a></li>';
		}
		if (($p+5)<$sayfaAdet && $sayfaAdet>10){echo '<li><a href="'.$urlPage.($sayfaAdet).'">Son Sayfa</a></li>';}
		if ($p<$sayfaAdet){echo '<li><a href="'.$urlPage.($p+1).'">İleri</a></li>';}
		echo '</ul></div>';
}

function mDesc($data)
{
    if (empty($data)){return $data=null; exit;}
	$data = scB($data);
	$data = strip_tags($data);
	$data = str_replace('"', "",$data);
	$data = boslukSil($data);
	$data = kisalt($data, 157);
	return $data;
}

function htmlReplace($data, $int)
{
    if (empty($data)){return $data=null; exit;}
	$data = scB($data);
	$data = strip_tags($data);
	$data = str_replace('"', "",$data);
	$data = boslukSil($data);
	$data = kisalt($data, $int);
	return $data;
}


function wText($text)
{

	$text = str_replace(array("\r\n","\r","\n"),"<br>", $text);
	// GEREKSİZ BOŞLUKLARI SİLME
	$text = str_replace("&nbsp;", " ",$text);
	$text = preg_replace('/\s\s+/', ' ', $text);
	$text = trim($text);
	// SON

	$text = str_replace("&#060;b&#062;", "<b>",$text);
	$text = str_replace("&#060;/b&#062;", "</b>",$text);
	$text = str_replace("&#060;h1&#062;", "<h1>",$text);
	$text = str_replace("&#060;/h1&#062;", "</h1>",$text);
	$text = str_replace("&#060;h2&#062;", "<h2>",$text);
	$text = str_replace("&#060;/h2&#062;", "</h2>",$text);
	$text = str_replace("&#060;h3&#062;", "<h3>",$text);
	$text = str_replace("&#060;/h3&#062;", "</h3>",$text);
	$text = str_replace("&#060;h4&#062;", "<h4>",$text);
	$text = str_replace("&#060;/h4&#062;", "</h4>",$text);
	$text = str_replace("&#060;h5&#062;", "<h5>",$text);
	$text = str_replace("&#060;/h5&#062;", "</h5>",$text);
	$text = str_replace("&#060;h6&#062;", "<h6>",$text);
	$text = str_replace("&#060;/h6&#062;", "</h6>",$text);
	$text = str_replace("&#060;br&#062;", "<br>",$text);
	$text = str_replace("&#060;i&#062;", "<i>",$text);
	$text = str_replace("&#060;/i&#062;", "</i>",$text);
	$text = str_replace("&#060;u&#062;", "<u>",$text);
	$text = str_replace("&#060;/u&#062;", "</u>",$text);
	$text = str_replace("&#060;ul&#062;", "<ul>",$text);
	$text = str_replace("&#060;/ul&#062;", "</ul>",$text);
	$text = str_replace("&#060;ol&#062;", "<ol>",$text);
	$text = str_replace("&#060;/ol&#062;", "</ol>",$text);
	$text = str_replace("&#060;li&#062;", "<li>",$text);
	$text = str_replace("&#060;/li&#062;", "</li>",$text);
	$text = str_replace("&#060;a&#062;", "<a>",$text);
	$text = str_replace("&#060;/a&#062;", "</a>",$text);
	$text = str_replace("&#060;blockquote&#062;", "<blockquote>",$text);
	$text = str_replace("&#060;/blockquote&#062;", "</blockquote>",$text);
	$text = strip_tags($text, "
	<b></b>
	<h1></h1>
	<h2></h2>
	<h3></h3>
	<h4></h4>
	<h5></h5>
	<h6></h6>
	<br>
	<i></i>
	<u></u>
	<ul></ul>
	<ol></ol>
	<li></li>
	<a></a>
	<blockquote></blockquote>
	");
	return $text;
}




function sc($data)
{
     if (empty($data)){  return $data=null; exit;}
	 $data = str_replace("!", "&#033;",$data);
	 $data = str_replace("%", "&#037;",$data);
	 $data = str_replace("*", "&#042;",$data);
	 $data = str_replace("<", "&#060;",$data);
	 $data = str_replace("=", "&#061;",$data);
	 $data = str_replace(">", "&#062;",$data);
	 $data = str_replace('"', "&#034;",$data);
	 $data = str_replace("'", "&#039;",$data);



	 /*
	 $data = str_replace("'", "&#039;",$data);
	 $data = str_replace("<", "&lt;",$data);
	 $data = str_replace(">", "&gt;",$data);
	 $data = str_replace('"', "&quot;",$data);
	 */
	 $data = trim($data);
	 return $data;
}


function scB($data)
{
     if (empty($data)){  return $data=null; exit;}
	 $data = str_replace("&#033;", "!", $data);
	 $data = str_replace("&#037;", "%", $data);
	 $data = str_replace("&#042;", "*", $data);
	 $data = str_replace("&#060;", "<", $data);
	 $data = str_replace("&#061;", "=", $data);
	 $data = str_replace("&#062;", ">", $data);
	 $data = str_replace("&#034;",'"', $data);
	 $data = str_replace("&#039;", "'", $data);
	 $data = trim($data);
	 return $data;
}

 // E-POSTA KONTROL
function filterEmail($string)
{
	$sart= array('gmail.com','hotmail.com','yandex.com');
	if ( filter_var($string, FILTER_VALIDATE_EMAIL) ){return 1;}
	else { return 0; }
	$parcala= explode("@",$email);
	$son= end($parcala);
	if(in_array($son,$sart)) returnTRUE;
	elsereturnFALSE;
}


 // SEO LİNK
function seo($string)
{
	$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
	$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
	$string = strtolower(str_replace($find, $replace, $string));
	$string = preg_replace("@[^a-z0-9]@i", ' ', $string);
	$string = trim(preg_replace('/\s+/', ' ', $string));
	$string = str_replace(' ', '-', $string);
	return $string;
}

 // YAZI KISALTMA
function kisalt($kelime, $str)
{
	if (strlen($kelime) > $str)
	{
	if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'...';
	else $kelime = substr($kelime, 0, $str).'...';
	}
	return $kelime;
}


// GEREKSİZ BOŞLUKLARI SİLME
function boslukSil($data)
{
    $data = str_replace("&nbsp;", " ",$data);
	$data = preg_replace("/\s+/", " ", $data);
	$data = trim($data);
	return $data;
}


// BENZERSİZ KOD
function benzersizKod() { return md5(microtime() . rand(). rand()); }

function alertError($s)
{
return $s;
}

function alertMsg($s)
{
return $s;
}
function canonical()
{
return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function dateTR($par, $time)
{
	if (empty($par)){  return $par; exit;}
	$explode = explode(" ", $par);
	$explode2 = explode("-", $explode[0]);
	$zaman = substr($explode[1], 0, 5);
	if ($explode2[1] == "1") $ay = "Ocak";
	elseif ($explode2[1] == "2") $ay = "Şubat";
	elseif ($explode2[1] == "3") $ay = "Mart";
	elseif ($explode2[1] == "4") $ay = "Nisan";
	elseif ($explode2[1] == "5") $ay = "Mayıs";
	elseif ($explode2[1] == "6") $ay = "Haziran";
	elseif ($explode2[1] == "7") $ay = "Temmuz";
	elseif ($explode2[1] == "8") $ay = "Ağustos";
	elseif ($explode2[1] == "9") $ay = "Eylül";
	elseif ($explode2[1] == "10") $ay = "Ekim";
	elseif ($explode2[1] == "11") $ay = "Kasım";
	elseif ($explode2[1] == "12") $ay = "Aralık";

	if($time){ $sunuc=$explode2[2]." ".$ay." ".$explode2[0].", ".$zaman; }
	else { $sunuc=$explode2[2]." ".$ay." ".$explode2[0]; }
	return $sunuc;
}

function dateTRS($par, $time)
{
	if (empty($par)){  return $par; exit;}
	$explode = explode(" ", $par);
	$explode2 = explode("-", $explode[0]);
	$zaman = substr($explode[1], 0, 5);
	$ay=$explode2[1];
	if($time){ $sunuc=$explode2[2]."/".$explode2[1]."/".$explode2[0]." ".$zaman; }
	else { $sunuc=$explode2[2]." ".$ay." ".$explode2[0]; }
	return $sunuc;
}
?>
