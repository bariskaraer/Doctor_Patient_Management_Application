<?php
if($_POST){
	


$regDate=date("Y/m/d H:m:s");
		
$table_value=array();	
$send_data=array();	
array_push($table_value,'patient_id','title','regDate','couse','doctor_id');	
array_push($send_data,base64_decode($r3),$_POST['title'],$regDate,$_POST['couse'],$_SESSION['wpID']);	
$result=insert_patient($table_patient_medicine,$table_value,$send_data);







}
?>

<div class="col-md-6">
    <?php 
if($result!=''){

if($result==1){
?>
 <div class="alert alert-success" role="alert">
İlaç Ekleme İşleminiz Başarılı Olmuştur
</div>
<?php }elseif($result==0) { ?>
 <div class="alert alert-danger" role="alert">
 İlaç Ekleme İşleminiz Başarısız Olmuştur
</div>
<?php }}?>
 <div class="white-box">
        <h3 class="box-title m-b-0">Hasta İlaç Ekleme Formu</h3>
        <p class="text-muted m-b-30 font-13"> Bilgileri Eksiksiz Doldurunuz. </p>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">İlaç Adı</label>
                        <input type="text" class="form-control" name="title" placeholder="Ad"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hasta Detayı</label>
                        <textarea type="text" class="form-control" name="couse" > </textarea></div>
                  
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">İlaç Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">

    <div class="white-box">
        <h3 class="box-title m-b-0">Hastaya Verilen İlaç Listesi</h3>
        <div class="row">
	        <ul class="list-group">
		        
		        			<?php 
			        			
			        			
			$attribute_string=array();
			$attribute_value=array();
			
			array_push($attribute_string,'patient_id');
			array_push($attribute_value,base64_decode($r3));        			
			        			
			$photo_data=select_patient_with_where($table_patient_medicine,$attribute_string,$attribute_value); 
			foreach($photo_data as $photo){
			
			?>
			<li class="list-group-item">İlaç Adı : <?php echo $photo['title']?> / Verilme Tarihi : <?php echo $photo['regDate']?> / Verilme Sebebi : <?php echo $photo['couse']?> </a></li>
			<?php } ?>
		        
			  
			  
			  
			</ul>
        </div>
    </div>
</div>
