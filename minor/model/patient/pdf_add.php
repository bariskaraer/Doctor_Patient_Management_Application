<?php
if($_POST){
	
   	    $targetDir = "minor/documents_pdf/";
	    $allowTypes = array('pdf');

	    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
	    if(!empty(array_filter($_FILES['files']['name']))){
	        foreach($_FILES['files']['name'] as $key=>$val){
	            // File upload path
	            $fileName = basename($_FILES['files']['name'][$key]);
	            $targetFilePath = $targetDir . $fileName;

	            // Check whether file type is valid
	            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	            if(in_array($fileType, $allowTypes)){
	                // Upload file to server
	                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
	                    // Image db insert sql
	                    
	                }else{
	                    $errorUpload .= $_FILES['files']['name'][$key].', ';
	                }
	            }else{
	                $errorUploadType .= $_FILES['files']['name'][$key].', ';
	            }
	        }

	        
	    }else{
	        $statusMsg = 'Please select a file to upload.';
	    }

$regDate=date("Y/m/d H:m:s");
		
$table_value=array();	
$send_data=array();	
array_push($table_value,'patient_id','pdf_file','regDate','title','descr','doctor_id');	
array_push($send_data,base64_decode($r3),$fileName,$regDate,$_POST['title'],$_POST['descr'],$_SESSION['wpID']);	
$result=insert_patient($table_patient_pdf,$table_value,$send_data);







}
?>

<div class="col-md-6">
    <?php 
if($result!=''){

if($result==1){
?>
 <div class="alert alert-success" role="alert">
 Pdf Yükleme İşleminiz Başarılı Olmuştur
</div>
<?php }elseif($result==0) { ?>
 <div class="alert alert-danger" role="alert">
 Pdf Yükleme İşleminiz Başarısız Olmuştur
</div>
<?php }}?>
    <div class="white-box">
        <h3 class="box-title m-b-0">Hasta PDF Ekleme Formu</h3>
        <p class="text-muted m-b-30 font-13"> Bilgileri Eksiksiz Doldurunuz. </p>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label class="col-md-12">Belge Adı </label>
                    <div class="col-md-12">
                    <input type="text" class="form-control" name="title"> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12">Belge Açıklaması</label>
                    <div class="col-md-12">
                    <textarea  type="text" class="form-control" name="descr"> </textarea></div>
                  </div>
                  
		           <div class="form-group">
				        <label class="col-sm-12">Dosya Yükleme</label>
				        <div class="col-sm-12">
				            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
				                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Dosya Seç</span> <span class="fileinput-exists">Değiştir</span>
				                <input type="file" name="files[]" > </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> </div>
				        </div>
				   </div>
				   
                  <div class="form-group">
                    
                    <div class="col-md-12">
                   
						<input type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="submit" value="Hasta Pdf Dosya Ekle"></div>
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">

    <div class="white-box">
        <h3 class="box-title m-b-0">Hasta PDF Listesi</h3>
        <div class="row">
	        <ul class="list-group">
		        
		        			<?php 
			        			
			        			
			$attribute_string=array();
			$attribute_value=array();
			
			array_push($attribute_string,'patient_id');
			array_push($attribute_value,base64_decode($r3));        			
			        			
			$photo_data=select_patient_with_where($table_patient_pdf,$attribute_string,$attribute_value); 
			foreach($photo_data as $photo){
			
			?>
			<li class="list-group-item"><a target="_blank" href="<?php echo $url ?>/patient/pdf_viewer/<?php echo $photo['pdf_id']?>" >PDF Başlığı : <?php echo $photo['title']?> / Kayıt Tarihi : <?php echo $photo['regDate']?></a></li>
			<?php } ?>
		        
			  
			  
			  
			</ul>
        </div>
    </div>
</div>
