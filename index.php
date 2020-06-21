<?php
   if ($_POST){


	$email	= sc($_POST["email"]);
	$password	= sc($_POST["password"]);

	$query = $db->prepare("SELECT * FROM wpaccount WHERE email = ? and pass=?  ");
	$query->execute(array($email,sha1(md5($password))));
	if($row = $query->fetch())
	{

			$_SESSION['wpID'] = $row['wpID'];
			$visitDate = $db->prepare("UPDATE wpaccount SET visitDate = ? WHERE wpID = ?");
			$visitDate->execute(array(date("Y/m/d G:i:s"), $row['wpID']));
				Header ("Location: ".$url."/dashboard");





	}
	else
	{
		$errorr= 'Geçersiz E-posta / Şifre.';
		if (isset($errorr)){setcookie("errorr",$errorr,time()+3);}
		Header ("Location: ".$url."");
		
		session_destroy();
	}




   }

if (isset($error))
{
	setcookie("error",$error,time()+2);
	Header ("Location: ".$_SERVER['HTTP_REFERER']);
}


?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url ?>/theme/plugins/images/favicon.png">
<title><?php echo $wpName ?></title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo $url ?>/theme/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php echo $url ?>/theme/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo $url ?>/theme/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php echo $url ?>/theme/css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register" style="background-color: #337AFF">
  <div class="login-box">
    <div class="white-box">
	       <?php if (isset($_COOKIE["error"]))	{echo alertError($_COOKIE["error"]);}?>
	        <?php if (isset($_COOKIE["msg"]))	{echo alertMsg($_COOKIE["msg"]);}?>
	        <form   method="post" class="form-horizontal form-material" id="loginform"name="login" onsubmit="return " >
        <h3 class="box-title m-b-20">Giriş Yap</h3>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="email" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" required="" placeholder="Şifre">
          </div>
        </div>
      
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Giriş Yap</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="<?php echo $url ?>/theme/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $url ?>/theme/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo $url ?>/theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?php echo $url ?>/theme/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo $url ?>/theme/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo $url ?>/theme/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo $url ?>/theme/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
