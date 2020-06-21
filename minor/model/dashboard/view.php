<?php 

$count_patient_total = count_total_patient($table_patient); // controller dan hasta sayısını çeker.

$count_spes_patient = 0;
$queryw = $db->prepare("SELECT * FROM patient where doctor_id=? " );
		$queryw->execute(array($_SESSION['wpID']));
		if ( $queryw->rowCount() ){
		foreach( $queryw as $roww ){
			$count_spes_patient = $count_spes_patient +1 ;
		}}




$count_spes_datee_past = 0;

$querywdate = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? AND date_day_month_year < CURDATE()" );
		$querywdate->execute(array($_SESSION['wpID']));
		if ( $querywdate->rowCount() ){
		foreach( $querywdate as $rowwdate ){
			$count_spes_datee_past = $count_spes_datee_past +1 ;
		}}

$count_spes_datee_pres = 0;

$querywdate_future = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? AND date_day_month_year > CURDATE()" );
		$querywdate_future->execute(array($_SESSION['wpID']));
		if ( $querywdate_future->rowCount() ){
		foreach( $querywdate_future as $rowwdate ){
			$count_spes_datee_pres = $count_spes_datee_pres +1 ;
		}}

$count_spes_datee_ptodayy = 0;

$querywdate_today = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? AND date_day_month_year = CURDATE()" );
		$querywdate_today->execute(array($_SESSION['wpID']));
		if ( $querywdate_today->rowCount() ){
		foreach( $querywdate_today as $rowwdate ){
			$count_spes_datee_ptodayy = $count_spes_datee_ptodayy +1 ;
		}}





$array_where_string = array();
$array_where_attribute = array();

array_push($array_where_string, "doctor_id");
array_push($array_where_attribute, $_SESSION['wpID']);



$count_total_money = select_patient_with_where($table_patient_payment,$array_where_string,$array_where_attribute); // controller dan toplam parayı çeker.
$total=0;
$made=0;
$remaining=0;
foreach($count_total_money as $post) { 
	$total=$total+$post['total_payment'];
	$made=$made+$post['payment_made'];
	$remaining=$remaining+$post['remaining_payment'];
	
}
$unusuable_money=$total-$made;




$last_registered = select_patient_with_limit($table_patient,$array_where_string,$array_where_attribute); 


?>			                   
  
<div class="col-md-12 col-lg-12 col-sm-12">
<div class="white-box">
	<div class="row row-in">
		<div class="col-lg-3 col-sm-6 row-in-br">
			<div class="col-in row">
				<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-user"></i>
					<h5 class="text-muted vb">Kayıtlı Hasta</h5> </div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h3 class="counter text-right m-t-15 text-danger"><?php echo $count_spes_patient?></h3> </div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
			<div class="col-in row">
				<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-pencil-alt"></i>
					<h5 class="text-muted vb">Geçmiş Randevu</h5> </div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h3 class="counter text-right m-t-15 text-info"><?php echo $count_spes_datee_past ?></h3> </div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 row-in-br">
			<div class="col-in row">
				<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-mouse-alt"></i>
					<h5 class="text-muted vb">Günlük Randevu</h5> </div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h3 class="counter text-right m-t-15 text-success"><?php echo $count_spes_datee_ptodayy ?></h3> </div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6  b-0">
			<div class="col-in row">
				<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-receipt"></i>
					<h5 class="text-muted vb">Gelecek Randevu</h5> </div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h3 class="counter text-right m-t-15 text-warning"><?php echo $count_spes_datee_pres ?></h3> </div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
   <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
	<div class="white-box bg-success m-b-15">
		<h3 class="box-title text-white">Toplam Alacak</h3>
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-6  m-t-30">
				<h1 class="text-white"><?php  echo money_format('%(#10n', $total) . "\n"?> TL</h1>
				
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
	<div class="white-box bg-purple m-b-15">
		<h3 class="text-white box-title">Yapılan Tahsilat</h3>
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-6  m-t-30">
				<h1 class="text-white"><?php  echo money_format('%(#10n', $made) . "\n"?> TL</h1>
				
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
	<div class="white-box bg-success m-b-15">
		<h3 class="box-title text-white">Yapılmamış Tahsilat</h3>
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-6  m-t-30">
				<h1 class="text-white"><?php  echo money_format('%(#10n', $unusuable_money) . "\n"?> TL</h1>
			
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
	<div class="white-box bg-purple m-b-15">
		<h3 class="text-white box-title">Merhaba <?php echo $dt_name ?> </h3>
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-6  m-t-30">
				<h1 class="text-white"><?php  setlocale(LC_ALL, 'tr_TR.UTF-8'); echo strftime("%e %B %Y %A", time());?></h1>
			 </div>

			</div>
		</div>
	</div>
</div>

<div class="col-md-4 col-xs-12 col-sm-6">
	<div class="white-box">
		<h3 class="box-title">Günlük Yapılacaklar</h3>
			<ul class="list-group">
			 
			
				<?php
					foreach($last_registered as $last){
					?>
				 <li class="list-group-item"><a href="<?php echo $url ?>/patient/detail/<?php echo base64_encode($last['patient_id'])?>" ><span><?php echo $last['name']?> <?php echo $last['surname']?><br> Kayıt Tarihi : <?php echo $last['regDate']?></span></a> </li>
				<?php }?>
			</ul>
	</div>
</div>
<div class="col-md-4 col-xs-12 col-sm-6">
	<div class="white-box">
		<h3 class="box-title">Son Kayıt Olan Hastalar</h3>
			<ul class="list-group">
			 
			
				<?php
					foreach($last_registered as $last){
					?>
				 <li class="list-group-item"><a href="<?php echo $url ?>/patient/detail/<?php echo base64_encode($last['patient_id'])?>" ><span><?php echo $last['name']?> <?php echo $last['surname']?><br> Kayıt Tarihi : <?php echo $last['regDate']?></span></a> </li>
				<?php }?>
			</ul>
	</div>
</div>
<div class="col-md-4 col-xs-12 col-sm-6">
	<div class="white-box">
		<h3 class="box-title">Günlük Randevular</h3>
			<ul class="list-group">
			 
			
				<?php
					foreach($last_registered as $last){
					?>
				 <li class="list-group-item"><a href="<?php echo $url ?>/patient/detail/<?php echo base64_encode($last['patient_id'])?>" ><span><?php echo $last['name']?> <?php echo $last['surname']?><br> Kayıt Tarihi : <?php echo $last['regDate']?></span></a> </li>
				<?php }?>
			</ul>
	</div>
</div>






				<div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box" id="calendarSpecified">
                            
                            <h3 class="box-title">Günlük Randevu Listesi</h3>
								
 							<ul class="list-task list-group" data-role="tasklist">
<?php
								  $doctorrID = $_SESSION['wpID'];
														
			                      $query = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? order by date_time_hour_minute asc");
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
									$today=date('d/m/Y');

									if ($dataTableDatee == $today) {
					
?>	

											
								<li class="list-group-item" data-role="task">
                                                    <div class="checkbox checkbox-info">
                                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                        <label for="inputCall"> <span><?php echo $patient_name ?> <?php echo $patient_surname ?> </span> <span class="label label-danger"><?php echo $date_time_hour_minute ?></span> </label>
                                                    </div>
                                </li>

<?php } };}else {echo "Randevu Bulunmamaktadır." ;} ?>

								</ul>
												
							</div>
                    </div>
						