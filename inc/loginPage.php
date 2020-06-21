<option value="0">Şube Seçin</option>
<?php
$query = $db->prepare("SELECT * FROM course_admin WHERE email = ? and authorization!=3");
	$query->execute(array($_POST['email']));
	  if ( $query->rowCount() ){
	  foreach( $query as $row ){



	  $courseID = $row['courseID'];
		  
	$querys = $db->prepare("SELECT * FROM courses WHERE courseID = ?");
	$querys->execute(array($courseID));
	  if ( $querys->rowCount() ){
	  foreach( $querys as $rows ){



	  $course_name = $rows['course_name'];
	  $courseIDd = $rows['courseID'];

	?>


	<option	 value="<?php echo	$courseIDd ?>"><?php echo $course_name ?></option>



	<?php } }} } ?>

	






