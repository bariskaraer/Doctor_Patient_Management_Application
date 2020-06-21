<?php
if($_POST){
	
$table_value=array();	
$send_data=array();	
$where_attribute=array();	
array_push($table_value,'name','surname','gender','age','email','phone','description');	
array_push($where_attribute,'patient_id');	
array_push($send_data,$_POST['name'],$_POST['surname'],$_POST['gender'],$_POST['age'],$_POST['email'],$_POST['phone'],$_POST['description'],base64_decode($r3));	

$result=update_patient($table_patient,$table_value,$send_data,$where_attribute);

}



//hasta bilgilerini çeker
$attribute_string=array();
$attribute_value=array();

array_push($attribute_string,'patient_id');
array_push($attribute_value,base64_decode($r3));

$gelen_data=select_patient_with_where($table_patient,$attribute_string,$attribute_value); 
//---------------------------------------------------------------------------------------
?>

<div class="col-md-6">
    <?php 
if($result!=''){

if($result==1){
?>
 <div class="alert alert-success" role="alert">
 Hasta Bilgileri Güncelleme Başarılı Olmuştur
</div>
<?php }elseif($result==0) { ?>
 <div class="alert alert-danger" role="alert">
 Hasta Bilgileri Güncelleme Başarısız Olmuştur
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
                        <input type="text" class="form-control" name="name" value="<?php echo $gelen_data[0]['name']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Soyadı</label>
                        <input type="text" class="form-control" name="surname"  value="<?php echo $gelen_data[0]['surname']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Telefon</label>
                        <input type="text" class="form-control" name="phone"  value="<?php echo $gelen_data[0]['phone']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Cinsiyet</label>
                        <input type="text" class="form-control" name="gender"  value="<?php echo $gelen_data[0]['gender']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Yaş</label>
                        <input type="text" class="form-control" name="age"  value="<?php echo $gelen_data[0]['age']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email"  value="<?php echo $gelen_data[0]['email']?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Detayı</label>
                        <textarea type="text" class="form-control" name="description" > <?php echo $gelen_data[0]['description']?></textarea></div>
                  
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Hasta Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
