<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url ?>/theme/plugins/images/favicon.png">
    <title><?php echo $wpName?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $url ?>/theme/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo $url ?>/theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo $url ?>/theme/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo $url ?>/theme/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo $url ?>/theme/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $url ?>/theme/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo $url ?>/theme/css/colors/blue.css" id="theme" rel="stylesheet">
    
    <link href="<?php echo $url ?>/theme/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo $url ?>/theme/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
	  .dn{ display:none;}
	  
	  /* sticky button */	
	
#feedback1 {
    height: 0px;
    width: 85px;
    position: fixed;
    right: 0;
    top: 30%;
    z-index: 1000;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

#feedback1 a {
	display: block;
	background:url(pc.png) no-repeat;
	height: 52px;
	width: 155px;	
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;

}
#feedback1 a:hover {
	background:url(pc-over.png) no-repeat;
}

#feedback {
	height: 0px;
	width: 85px;
	position: fixed;
	right: 0;
	top: 50%;
	z-index: 1000;
	transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
#feedback a {
	display: block;
	background:#000;
	height: 52px;
	padding-top: 10px;
	width: 155px;
	text-align: center;
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;
}
#feedback a:hover {
	background:#00495d;
}

/* enquiry form */
	  </style>
</head>