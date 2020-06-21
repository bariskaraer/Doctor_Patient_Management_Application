<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Istanbul');
@set_time_limit(0);
session_start();
try {
	$db = new PDO("mysql:host=185.86.15.22;dbname=doktor;charset=utf8", "doktor", "3gDm6d4!");
	 $db->query("SET CHARACTER SET utf8");
	$db->query("SET NAMES utf8'");
$db->query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
	}
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }
$ct = $db->prepare("select * from wpsettings");
$ct->execute(array());
if($ctr = $ct->fetch())
{
	$ctr_key=$ctr['oneSignalKey'];
	$wpName=$ctr['wpName'];
	$smtpServer=$ctr['smtpServer'];
	$smtpEmail=$ctr['smtpEmail'];
	$smtpEmailPass=$ctr['smtpEmailPass'];
	$smtpTo=$ctr['smtpTo'];
	$mDesc=$ctr['mDesc'];
	$author=$ctr['author'];
	$mKeys=$ctr['mKeys'];
	$ctr_maintenance=$ctr['maintenance'];
}

$table_patient = 'patient';
$table_patient_photo = 'patient_photo';
$table_patient_pdf = 'patient_pdf';
$table_patient_appointment = 'patients_appointment';
$table_patient_payment = 'payment';
$table_patient_medicine = 'medicine';
$table_patient_payments_log = 'payments_log';

$url="https://www.doktor.krakersoft.com";
$aUrl=$url."/minor";
?>