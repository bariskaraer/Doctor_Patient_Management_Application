<?php
if($_POST){
	
$table_value=array();	
$send_data=array();	
$regDate=date("Y/m/d H:m:s");
array_push($table_value,'name','surname','gender','age','email','phone','description','regDate','doctor_id','status');	
array_push($send_data,$_POST['name'],$_POST['surname'],$_POST['gender'],$_POST['age'],$_POST['email'],$_POST['phone'],$_POST['description'],$regDate,$_SESSION['wpID'],1);	

$result=insert_patient($table_patient,$table_value,$send_data);

// Post to patients table





$array_where_string = array();
$array_where_attribute = array();

array_push($array_where_string, "name", "surname", "doctor_id");
array_push($array_where_attribute, $_POST['name'],$_POST['surname'], $_SESSION['wpID']);
                  
# Inject
$data= select_patient_with_where($table_patient,$array_where_string,$array_where_attribute);

foreach($data as $post) { 

        $patientvar = $post['patient_id'];
 }

$table_value_payment=array();   
$send_data_payment=array(); 
array_push($table_value_payment,'patient_id','total_payment','payment_made','remaining_payment','doctor_id');   
array_push($send_data_payment, $patientvar, $_POST['total_money'],$_POST['paid_money'],$_POST['remaining_money'], $_SESSION['wpID']);   

$result=insert_patient("payment",$table_value_payment,$send_data_payment);

// Post to payments Table




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
                <form method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Adı</label>
                        <input type="text" class="form-control" name="name" placeholder="Ad"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Soyadı</label>
                        <input type="text" class="form-control" name="surname" placeholder="Soyad"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Telefon</label>
                        <input type="text" class="form-control" name="phone" placeholder="Telefon No"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Cinsiyet</label>
                        <input type="text" class="form-control" name="gender" placeholder="Cinsiyet"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Yaş</label>
                        <input type="text" class="form-control" name="age" placeholder="Yaş"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Adresini"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Toplam Ödeme</label>
                        <input type="number" class="form-control" name="total_money" id="first"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yapılan Ödeme</label>
                        <input type="number" class="form-control" name="paid_money" onchange="tutarFunction()" id="second"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kalan Ödeme</label>
                        <input type="number" class="form-control" name="remaining_money" id="third" readonly> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Detayı</label>
                        <textarea type="text" class="form-control" name="description" > </textarea></div>
                  
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Hasta Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    function tutarFunction(){
        document.getElementById("third").value=document.getElementById("first").value-document.getElementById("second").value;    
}
</script>