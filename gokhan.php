<?php
$u = explode("/", $_GET['u']);
if(!empty($u[0])){$r1=$u[0];}else{$r1=null;}
if(!empty($u[1])){$r2=$u[1];}else{$r2=null;}
if(!empty($u[2])){$r3=$u[2];}else{$r3=null;}
if(!empty($u[3])){$r4=$u[3];}else{$r4=null;}
if(!empty($u[4])){$r5=$u[4];}else{$r5=null;}
if(!empty($u[5])){$r6=$u[5];}else{$r6=null;}
if(!empty($u[6])){$r7=$u[6];}else{$r7=null;}

include 'inc/conn.php';
include 'inc/function.php';


if($ctr_maintenance==0){

if(empty($r1)){$in="index.php";}
	else
	{
	if($r1=='hizmetlerimiz') { $in='hizmetlerimiz.php'; }
	
	
	elseif($r1=='logout') { $in='minor/logout.php'; }
	elseif($r1=='dashboard')	{$in='minor/dashboard.php';}
	
	elseif($r1=='patient')  {$in='minor/view/patient/'.$r2.'.php';}
	elseif($r1=='interview')  {$in='minor/view/interview/'.$r2.'.php';}
	elseif($r1=='payments')  {$in='minor/view/payments/'.$r2.'.php';}
	elseif($r1=='reports')  {$in='minor/view/reports/'.$r2.'.php';}

	elseif($r1=='settings')  {$in='minor/settings/'.$r2.'.php';}

	elseif($r1=='webSignal') { $in='sys/webSignal.php'; }


	else
	{
		$in='minor/profile.php';

	}
}
}
else{
	if(empty($r1)){$in="404.php";}
		else
	{
	if($r1=='hizmetlerimiz') { $in='hizmetlerimiz.php'; }
	
//** Admin Authentication **//

/*
	elseif($r1=='giris')	{$in='minor/giris.php';}
	elseif($r1=='cikis') { $in='minor/cikis.php'; }
	elseif($r1=='anasayfa')	{$in='minor/anasayfa.php';}
	elseif($r1=='minor')  {$in='minor/modul/'.$r2.'/'.$r3.'.php';}
*/




	else
	{
		$in='minor/profile.php';

	}
}
	}
	include $in;
?>
