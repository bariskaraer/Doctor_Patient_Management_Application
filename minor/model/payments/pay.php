

<?php


if($_POST){



$attribute_string_odeme_post=array();
$attribute_value_odeme_post=array();

array_push($attribute_string_odeme_post,'patient_id');
array_push($attribute_value_odeme_post,base64_decode($r3));

$gelen_data_odeme_post=select_patient_with_where($table_patient_payment,$attribute_string_odeme_post,$attribute_value_odeme_post); 







    

$attributes=array();   
$attribute_values=array();  
$where_attribute=array(); 
array_push($attributes,'payment_made','remaining_payment'); 
array_push($attribute_values,$gelen_data_odeme_post[0]['payment_made'] + $_POST['amount'],$gelen_data_odeme_post[0]['remaining_payment'] - $_POST['amount'],base64_decode($r3)); 
array_push($where_attribute,"patient_id"); 

$result=update_patient($table_patient_payment,$attributes,$attribute_values,$where_attribute);

// Update payments




$regDate=date("Y/m/d");

// İnsert payment log


$table_value=array();   
$send_data=array(); 
array_push($table_value,'payment_amount','patient_id','doctor_id','payment_date'); 
array_push($send_data,$_POST['amount'],base64_decode($r3),$_SESSION['wpID'],$regDate); 

$result=insert_patient($table_patient_payments_log,$table_value,$send_data);


}











$attribute_string_odeme=array();
$attribute_value_odeme=array();

array_push($attribute_string_odeme,'patient_id');
array_push($attribute_value_odeme,base64_decode($r3));

$gelen_data_odeme=select_patient_with_where($table_patient_payment,$attribute_string_odeme,$attribute_value_odeme); 

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
        <h3 class="box-title m-b-0">Hasta Ödeme Formu</h3>
        <p class="text-muted m-b-30 font-13"> Bilgileri Eksiksiz Doldurunuz. </p>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ödeme Miktarı</label>
                        <input type="number" class="form-control" name="amount"> </div>
                    
                  
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Ödeme Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>