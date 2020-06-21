<?php

$attribute_string=array();
$attribute_value=array();

array_push($attribute_string,'patient_id');
array_push($attribute_value,base64_decode($r3));

$gelen_data=select_patient_with_where($table_patient,$attribute_string,$attribute_value); 




$attribute_string_odeme=array();
$attribute_value_odeme=array();

array_push($attribute_string_odeme,'patient_id');
array_push($attribute_value_odeme,base64_decode($r3));

$gelen_data_odeme=select_patient_with_where($table_patient_payment,$attribute_string_odeme,$attribute_value_odeme); 











$attribute_string_odeme_log=array();
$attribute_value_odeme_log=array();

array_push($attribute_string_odeme_log,'patient_id');
array_push($attribute_value_odeme_log,base64_decode($r3));

$gelen_data_odeme_log=select_patient_with_where($table_patient_payments_log,$attribute_string_odeme_log,$attribute_value_odeme_log); 

?>





<div class="row">
	
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Tedavi Ücreti</h3>
                            <div class="text-right"> <span class="text-muted">Tedavi Ücreti</span>
                                <h1><sup><i class="ti-arrow-up text-success"></i></sup> ₺ <?php echo $gelen_data_odeme[0]['total_payment']?> </h1> </div> <span class="text-success">20%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Ödenen Miktar</h3>
                            <div class="text-right"> <span class="text-muted">Ödenen Miktar</span>
                                <h1><sup><i class="ti-arrow-down text-danger"></i></sup> ₺ <?php echo $gelen_data_odeme[0]['payment_made']?> </h1> </div> <span class="text-danger">30%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Kalan Ödeme</h3>
                            <div class="text-right"> <span class="text-muted">Kalan Ödeme</span>
                                <h1><sup><i class="ti-arrow-up text-info"></i></sup> ₺ <?php echo $gelen_data_odeme[0]['remaining_payment']?></h1> </div> <span class="text-info">60%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                    
</div>







<div class="col-md-4 col-xs-12">
	<div class="white-box">
		<div class="user-btm-box">
			<!-- .row -->
			<div class="row text-center m-t-10">
				<div class="col-md-6 b-r"><strong>Ad Soyad</strong>
					<p><?php echo $gelen_data[0]['name']?> <?php echo $gelen_data[0]['surname']?></p>
				</div>
				<div class="col-md-6"><strong>Yaş / Cinsiyet </strong>
					<p><?php echo $gelen_data[0]['age']?> / <?php echo $gelen_data[0]['gender']?></p>
				</div>
			</div>
			<!-- /.row -->
			<hr>
			<!-- .row -->
			<div class="row text-center m-t-10">
				<div class="col-md-6 b-r"><strong>Email </strong>
					<p><?php echo $gelen_data[0]['email']?></p>
				</div>
				<div class="col-md-6"><strong>Telefon</strong>
					<p><?php echo $gelen_data[0]['phone']?></p>
				</div>
			</div>
			<!-- /.row -->
			<hr>
			<!-- .row -->

			<!-- /.row -->
			<div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <a  class="btn btn-block btn-danger patient_delete">Hasta Sil</a>
                
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/patient/edit/<?php echo $r3 ?>" class="btn btn-block btn-info">Hasta Güncelle</a>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/interview/add/<?php echo $r3 ?>" class="btn btn-block btn-warning">Randevu Ver</a>
            </div>
															
           <input type="hidden" id="patient_id" value="<?php echo base64_decode($r3)?>">
            
        </div>
		</div>
	</div>
	
	<div class="white-box">
		<h3 class="box-title">Ödeme Geçmişi</h3>
		

		
		   <ul class="list-group">
		    <?php  foreach($gelen_data_odeme_log as $post) {  ?>
			<li class="list-group-item"> <span> ₺ <?php echo $post['payment_amount'] ?></span> <span style="float: right" class="label label-danger"><?php echo $post['payment_date'] ?></span></a></li>
			<?php } ?>
		        
			  
			  
			  
			</ul>
	</div>

</div>

<div class="col-lg-8">
    <div class="white-box">
        <h3 class="m-b-0 box-title">Hasta İşlemleri </h3>
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/patient/photo_add/<?php echo $r3 ?>" class="btn btn-block btn-default">Fotoğraf Yükle</a>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/patient/pdf_add/<?php echo $r3 ?>" class="btn btn-block btn-info">PDF Yükle</a>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/patient/medicine/<?php echo $r3 ?>" class="btn btn-block btn-primary">Reçeteler</a>
            </div>
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <a href="<?php echo $url ?>/payments/pay/<?php echo $r3 ?>" class="btn btn-block btn-success">Ödeme İşlemleri</a>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12">
                <a  href="<?php echo $url ?>/patient/appointments/<?php echo $r3 ?>" class="btn btn-block btn-danger">Randevuları</a>
            </div>
            
        </div>
       
        </div>
    </div>
    
    <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">Hastadan Alınan İlk Bilgi</div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <p><?php echo $gelen_data[0]['description']?></p>
            </div>
        </div>
    </div>
    
</div>

</div>



<?php

// panel panel-info   warning   danger success  primary inverse




$attribute_string_randevu=array();
$attribute_value_randevu=array();

array_push($attribute_string_randevu,'patient_id');
array_push($attribute_value_randevu,base64_decode($r3));

$gelen_data_randevu=select_patient_with_where_profile_randevu("patients_appointment",$attribute_string_randevu,$attribute_value_randevu); 




?>










