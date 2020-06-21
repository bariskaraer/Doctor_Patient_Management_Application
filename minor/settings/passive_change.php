
<?php

$patient_id = $_POST['patient_id'];

$query = $db->prepare("UPDATE patient SET status=0 WHERE patient_id =?");
$delete=$query->execute(array($patient_id));

	
	 ?>

