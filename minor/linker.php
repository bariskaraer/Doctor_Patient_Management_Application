
<?php require 'minor/controller/fullController.php'; ?>

<!-- Anasayfa Linkleme -->
<?php 
   
    
    if($r1=='dashboard'){?>
<div class="row">
    <?php require 'minor/model/dashboard/view.php'; ?>
</div>
<?php }?>
<!-- Hasta Sayfaları Linkleme -->
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/list'){?>
<div class="row">
    <?php require 'minor/model/patient/list.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/list_passive'){?>
<div class="row">
    <?php require 'minor/model/patient/list_passive.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/add'){?>
<div class="row">
    <?php require 'minor/model/patient/add.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/edit'){?>
<div class="row">
    <?php require 'minor/model/patient/edit.php'; ?>
</div>
<?php }?>
   <?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/detail'){?>
<div class="row">
    <?php require 'minor/model/patient/detail.php'; ?>
</div>
<?php }?>
   <?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/photo_add'){?>
<div class="row">
    <?php require 'minor/model/patient/photo_add.php'; ?>
</div>
<?php }?>
 <?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/pdf_add'){?>
<div class="row">
    <?php require 'minor/model/patient/pdf_add.php'; ?>
</div>
<?php }?>
 <?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/medicine'){?>
<div class="row">
    <?php require 'minor/model/patient/medicine.php'; ?>
</div>
<?php }?>
 <?php 
    $link=$r1.'/'.$r2;
    
    if($link=='patient/appointments'){?>
<div class="row">
    <?php require 'minor/model/patient/appointments.php'; ?>
</div>
<?php }?>
<!-- Randevu Sayfaları Linkleme -->

<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='interview/list'){?>
<div class="row">
    <?php require 'minor/model/interview/list.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='interview/calendar'){?>
<div class="row">
    <?php require 'minor/model/interview/calendar.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='interview/add'){?>
<div class="row">
    <?php require 'minor/model/interview/add.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='interview/edit'){?>
<div class="row">
    <?php require 'minor/model/interview/edit.php'; ?>
</div>
<?php }?>

<!-- Ödeme Sayfaları Linkleme -->

<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='payments/pay'){?>
<div class="row">
    <?php require 'minor/model/payments/pay.php'; ?>
</div>
<?php }?>

<!-- Yapılacak Sayfaları Linkleme -->

<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='todo/list'){?>
<div class="row">
    <?php require 'minor/model/todo/list.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='todo/add'){?>
<div class="row">
    <?php require 'minor/model/todo/add.php'; ?>
</div>
<?php }?>
<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='todo/edit'){?>
<div class="row">
    <?php require 'minor/model/todo/edit.php'; ?>
</div>
<?php }?>



<!-- Rapor Sayfaları Linkleme -->

<?php 
    $link=$r1.'/'.$r2;
    
    if($link=='reports/list'){?>
<div class="row">
    <?php require 'minor/model/reports/list.php'; ?>
</div>
<?php }?>