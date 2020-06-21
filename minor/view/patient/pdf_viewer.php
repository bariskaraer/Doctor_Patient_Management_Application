
<?php
	
$query = $db->prepare("Select * from patient_pdf where pdf_id=?");
$query->execute(array($r3));
if($row = $query->fetch())
{


	$pdf_file		= $row['pdf_file'];
					
										
}
	
	
	
	
?>


<div style="text-align:center">
 <iframe src="/minor/documents_pdf/<?php echo $pdf_file ?>" width="100%" height="100%"></iframe>
  </div>