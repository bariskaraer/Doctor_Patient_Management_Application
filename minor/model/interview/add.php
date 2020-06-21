<?php
if($_POST){
$table='patients_appointment';	
$table_value=array();	
$send_data=array();	
array_push($table_value,'patient_id','doctor_id','date_day_month_year','date_time_hour_minute','appointment_details');
array_push($send_data,$_POST['patient_id'],$_SESSION['wpID'],$_POST['interview_date'],$_POST['clock'],$_POST['appointment_details']);	

$result=insert_patient($table,$table_value,$send_data);
}
?>

<div class="col-md-6">
    <?php 
if($result!=''){

if($result==1){
?>
 <div class="alert alert-success" role="alert">
 başarılı
</div>
<?php }elseif($result==0) { ?>
 <div class="alert alert-danger" role="alert">
 başarısız
</div>
<?php }}?>
    <div class="white-box">
        <h3 class="box-title m-b-0">Hasta Ekleme Formu</h3>
        <p class="text-muted m-b-30 font-13"> Bilgileri Eksiksiz Doldurunuz. </p>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="post" enctype="multipart/form-data" class="form-material">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Randevu Tarihi</label>
                        <input type="date" class="form-control" name="interview_date" id="datepick" onchange="calendarr()"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lütfen Hasta Seçiniz</label>
                        
                        <select class="form-control" name="patient_id">
                        	<?php

                        	$array_where_string = array();
                        	$array_where_attribute = array();

                        	array_push($array_where_string, "doctor_id");
                        	array_push($array_where_attribute, $_SESSION['wpID']);


	                        $data= select_patient_with_where($table_patient,$array_where_string,$array_where_attribute);
	                        foreach($data as $post) { 

	                        ?>
                            <option value="<?php echo $post['patient_id'] ?>"><?php echo $post['name'] ?> <?php echo $post['surname'] ?></option>

                             <?php  } ?>
                        </select>
                     </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Randevu Özeti</label>
                        <textarea class="form-control" rows="5" name="appointment_details" placeholder="Özet"></textarea>
                    </div>
                        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Randevu Saati</label>
                        <input type="time" class="form-control" name="clock" > </div>
                  
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Randevu Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>



                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box" id="calendarSpecified">
                            
                            <h3 class="box-title">Randevu Listesi</h3>
                            <ul class="list-task list-group" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule"> <span>Lütfen Önce Tarih Seçiniz</span> </label>
                                    </div>
                                </li>
                               
                            </ul>



                        </div>
                    </div>







<script type="text/javascript">
            
            


            function calendarr(val) {
        
            var dateSpecs = $( "#datepick" ).val();
            $.ajax({
                type: "POST",
                url: "<?php $url ?>/settings/appointmentCalendar",
                data:{'date':dateSpecs},
                success: function(data){
                    $("#calendarSpecified").html(data);
                }
            });
    
        }


</script>