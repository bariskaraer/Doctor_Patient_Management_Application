
<?php

$patient_id = $_POST['patient_id'];

$query = $db->prepare("DELETE FROM patient where patient_id=?");
$delete=$query->execute(array($patient_id));
	

$query = $db->prepare("DELETE FROM patient_photo where patient_id=?");
$delete=$query->execute(array($patient_id));

$query = $db->prepare("DELETE FROM patient_pdf where patient_id=?");
$delete=$query->execute(array($patient_id));

$query = $db->prepare("DELETE FROM patients_appointment where patient_id=?");
$delete=$query->execute(array($patient_id));

$query = $db->prepare("DELETE FROM payment where patient_id=?");
$delete=$query->execute(array($patient_id));

			
	
	
	
	
		
		


	 ?>