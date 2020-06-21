<?php
if($_POST){
	
   
// image mime to be checked against
    $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
        image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_BMP));
 
    $error_msg = "";
    $imageUploadERROR = FALSE;
    $myfile = $_FILES["fileToUpload"];
    $allimg=null;
  $base64 = "";
    $css = "";
    $tag = "";
    
    //multiple image convert to base64 and save mysql
    for ($i = 0; $i < count($myfile["name"]); $i++) {
 
        if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
            // uploaded file is OK
 
            if (in_array($myfile["type"][$i], $imagetype)) {
                // get the extention of the file
              
        $file = rand(0, 10000000).$myfile['name'][$i];
        if (move_uploaded_file($myfile['tmp_name'][$i], $file)) {
            if($fp = fopen($file,"rb", 0))
            {
               $picture = fread($fp,filesize($file));
               fclose($fp);
               // base64 encode the binary data, then break it
               // into chunks according to RFC 2045 semantics
               $base64 = base64_encode($picture);
               
            }
        }
                    
               
            } 
        }
 
     
        
    }
		
$iparr []=$base64;

$resimler="";
  foreach ($iparr as $key => $resim){ 
	  
		  $resimler.=strval($resim);
		  $resimler.="|";
	 
  }

$logo=rtrim($resimler,"|");

$regDate=date("Y/m/d H:m:s");
		
$table_value=array();	
$send_data=array();	
array_push($table_value,'patient_id','image','regDate','title','descr');	
array_push($send_data,base64_decode($r3),$logo,$regDate,$_POST['title'],$_POST['descr']);	

$result=insert_patient($table_patient_photo,$table_value,$send_data);
}
?>
<div class="col-md-6">
    <?php 
if($result!=''){

if($result==1){
?>
 <div class="alert alert-success" role="alert">
 Fotoğraf Yükleme İşleminiz Başarılı Olmuştur
</div>
<?php }elseif($result==0) { ?>
 <div class="alert alert-danger" role="alert">
 Fotoğraf Yükleme İşleminiz Başarısız Olmuştur
</div>
<?php }}?>
    <div class="white-box">
        <h3 class="box-title m-b-0">Hasta Fotoğraf Ekleme Formu</h3>
        <p class="text-muted m-b-30 font-13"> Bilgileri Eksiksiz Doldurunuz. </p>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label class="col-md-12">Fotoğraf Adı </label>
                    <div class="col-md-12">
                    <input type="text" class="form-control" name="title"> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12">Fotoğraf Açıklaması</label>
                    <div class="col-md-12">
                    <textarea  type="text" class="form-control" name="descr"> </textarea></div>
                  </div>
                  
		           <div class="form-group">
				        <label class="col-sm-12">Fotoğraf Yükleme</label>
				        <div class="col-sm-12">
				            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
				                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Dosya Seç</span> <span class="fileinput-exists">Değiştir</span>
				                 <input type="file" name="fileToUpload[]" id="fileToUpload"></span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> </div>
				        </div>
				   </div>
				   
                  <div class="form-group">
                    
                    <div class="col-md-12">
                   
						<input type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="submit" value="Hasta Fotoğraf Ekle"></div>
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">
	<div class="white-box">
		<div class="row">
		<h3 class="box-title">Hasta Fotoğrafları</h3>
		<!-- START carousel-->
			<?php 
				
$attribute_string=array();
$attribute_value=array();

array_push($attribute_string,'patient_id');
array_push($attribute_value,base64_decode($r3));
				
			$photo_data=select_patient_with_where($table_patient_photo,$attribute_string,$attribute_value); 
			foreach($photo_data as $photo){
			
			?>
			
			<div class="col-sm-6"> <img src="data:image/jpg;base64,<?php echo $photo['image'] ?>" alt="image" class="img-responsive img-rounded" width="250">
			
			</div>
			<?php } ?>
		
		</div>
	</div>
</div>



