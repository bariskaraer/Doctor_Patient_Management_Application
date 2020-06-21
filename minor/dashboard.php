<?php if (empty($_SESSION['wpID'])){Header ("Location: ".$url."");}?>
<!DOCTYPE html>
<html lang="tr">

<?php include 'minor/head_get.php';?>

<body>
    <!-- Preloader -->
   <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
       <?php require 'minor/header.php';?>
        <!-- Left navbar-header -->
        <?php require 'minor/leftBar.php';?>
        
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Doktor</h4> </div>
                                       <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <?php
	                   $link=$r1.'/'.$r2;
	                if($r1=='patient' && $link !='patient/list' && $link !='patient/detail'  ){
                ?>

				<div id="feedback">
					<a href="<?php echo $url ?>/patient/detail/<?php echo $r3 ?>" class="btn btn-glow btn-bg-gradient-x-blue-green sticky "><i class="ft-arrow-right"> </i>Hasta Profili</a>
				</div>

				<?php
					}if($link =='payments/pay'){
				?>
				<div id="feedback">
					<a href="<?php echo $url ?>/patient/detail/<?php echo $r3 ?>" class="btn btn-glow btn-bg-gradient-x-blue-green sticky "><i class="ft-arrow-right"> </i>Hasta Profili</a>
				</div>				
				
				<?php
					}
				?>
				

                <?php require 'minor/linker.php';?>




            </div>
            <!-- /.container-fluid -->
            <?php require 'minor/footer.php';?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    
    <?php include 'minor/js_linker.php';?>
    
</body>

</html>
