<?php 


$dateSelected = $_POST["date"];
$doctorrID = $_SESSION['wpID'];

$dateSelecetedModified=date('d/m/Y',strtotime($dateSelected));

?>

								<h3 class="box-title">Randevu Listesi</h3>
                                <ul class="list-task list-group" data-role="tasklist">

<?php
								 	
														
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

									if ($dataTableDatee == $dateSelecetedModified) {
									

									
?>

											
												<li class="list-group-item" data-role="task">
                                                    <div class="checkbox checkbox-info">
                                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                        <label for="inputCall"> <span><?php echo $patient_name ?> <?php echo $patient_surname ?> / <?php echo $appointment_details ?></span> <span class="label label-danger"><?php echo $date_time_hour_minute ?></span> </label>
                                                    </div>
                                                </li>
											

<?php } };}else {echo "Randevu Bulunmamaktadır." ;} ?>



</ul>


































































                            
                                
                                
                               
                            