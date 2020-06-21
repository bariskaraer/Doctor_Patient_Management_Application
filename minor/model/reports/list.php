<?php 

$count_patient_total = count_total_patient($table_patient); // controller dan hasta sayısını çeker.

$array_where_string = array();
$array_where_attribute = array();

array_push($array_where_string, "doctor_id");
array_push($array_where_attribute, $_SESSION['wpID']);

$patient_payments = select_patient_with_where($table_patient_payment,$array_where_string,$array_where_attribute);





$array_where_string_alt = array();
$array_where_attribute_alt = array();

array_push($array_where_string_alt, "doctor_id");
array_push($array_where_attribute_alt, $_SESSION['wpID']);

$patient_payments_total_past = select_patient_with_where("payments_log",$array_where_string_alt,$array_where_attribute_alt);

?>			                   
  
 <div class="col-sm-12">
<?php if($r3=='gecmis'){ ?>
    <div class="white-box">
        <h3 class="box-title m-b-0">Toplam Aktif Hasta Ödemeleri </h3>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Ödediği Miktar</th>
                        <th>Kalan Ödeme</th>
                    </tr>
                </thead>
                <tbody>
	          <?php  foreach($patient_payments as $payments_table) { 
				
$patient_string = array();
$patient_value = array();
array_push($patient_string, "patient_id");
array_push($patient_value, $payments_table['patient_id']);		               
$patient_detail = select_patient_with_where($table_patient,$patient_string,$patient_value);


	foreach($patient_detail as $patient) { 
		$name=$patient['name'];
		$surname=$patient['surname'];
        $status=$patient['status'];
		}	            
        if($status){   
	               ?> 
	                    <tr>
	                        <td><?php echo $name ?> <?php echo $surname?></td>
	                        <td><?php echo $payments_table['payment_made'] ?> <?php echo "₺" ?></td>
	                        <td><?php echo $payments_table['remaining_payment'] ?> <?php echo "₺" ?></td>
	                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php }elseif ($r3=='reports') { ?>

    <div class="white-box">
        <h3 class="box-title m-b-0">Aktif Hasta Ödemeleri</h3>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Ödediği Miktar</th>
                        <th>Kalan Ödeme</th>
                    </tr>
                </thead>
                <tbody>
              <?php  foreach($patient_payments_total_past as $payments_table_past_alt) { 
                
$patient_string = array();
$patient_value = array();
array_push($patient_string, "patient_id");
array_push($patient_value, $payments_table_past_alt['patient_id']);                     
$patient_detail = select_patient_with_where($table_patient,$patient_string,$patient_value);


    foreach($patient_detail as $patient) { 
        $name=$patient['name'];
        $surname=$patient['surname'];
        $status=$patient['status'];
        }                

                    if($status){

                      
                   ?> 
                        <tr>
                            <td><?php echo $name ?> <?php echo $surname?></td>
                            <td><?php echo $payments_table_past_alt['payment_amount'] ?> <?php echo "₺" ?></td>
                            <td><?php echo $payments_table_past_alt['payment_date'] ?> <?php echo "₺" ?></td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>



  <?php  }  ?>
    </div>