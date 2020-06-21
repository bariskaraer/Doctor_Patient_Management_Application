



<?php 
$doctorrID = $_SESSION['wpID'];
$firstday = date('d-m-Y', strtotime("this week")); 
$firstday = date('d/m/Y',strtotime($firstday . "+3 days"));

?>
				<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <ul class="timeline">
								

											<?php
								  $temp_integer = 0;
														
			                      $query = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? order by date_time_hour_minute asc ");
			                      $query->execute(array($doctorrID));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
										$date_time_hour_minute 			= $row['date_time_hour_minute'];
										$date_day_month_year 			= $row['date_day_month_year'];
										$appointment_details 			= $row['appointment_details'];

										

									$queryPatient = $db->prepare("SELECT * FROM patient where patient_id=?" );
									$queryPatient->execute(array($row["patient_id"]));
									if($rows = $queryPatient->fetch())
									{							
									$patient_name				=$rows["name"];
									$patient_surname			=$rows["surname"];
									}
										

									$dataTableDatee=date('d/m/Y',strtotime($date_day_month_year));

									if ($dataTableDatee == $firstday) {
										
									
?>

											
								<li class= <?php if ($temp_integer % 2 == 1) { echo 'timeline-inverted';}else{} ?>  >
                                    <div class="timeline-badge success"><img class="img-responsive" alt="user" src="../plugins/images/users/genu.jpg"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><?php echo $patient_name ?> <?php echo $patient_surname ?> </h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $date_time_hour_minute ?></small> </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?php echo $appointment_details ?></p>
                                        </div>
                                    </div>
                                </li>
                                
											
<?php $temp_integer = $temp_integer + 1; ?>

<?php } };}else {echo "Randevu Bulunmamaktadır." ;} ?>

												
							  </ul>
                        </div>
                    </div>
                </div>	
						
