
<?php
if ($_POST){
	
	if(isset($_POST['name']))
	{ 
		$name=trim($_POST['name']);
		if (empty($name))			{ echo '<i class="false">Ad Soyad boş bırakılamaz.</i>';}
		elseif(mb_strlen($name) > 30)	{ echo '<i class="false">Ad Soyad 30 karakterden fazla olamaz.</i>';}
		elseif(mb_strlen($name) < 2)	{ echo '<i class="false">Ad Soyad 2 karakterden az olamaz.</i>';}
		else							{ echo '<i class="true-icon"></i>';}
	}


	
	elseif(isset($_POST['email']))
	{ 
		$email=trim($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) )
		{ echo '<i class="false">Geçerli bir e-posta adresi gibi görünmüyor.</i>';}
		else
		{
			$query = $db->prepare("SELECT email FROM users WHERE email=?");
			$query->execute(array($email));
			if($query->fetch()){ echo '<i class="false">Bu e-posta zaten kayıtlı.</i>';}
			else{echo '<i class="true-icon"></i>';}
		}
	}



	
	elseif(isset($_POST['pass']))
	{ 
		$pass=trim($_POST['pass']);
		if (empty($pass))			{ echo '<i class="false">Şifre boş bırakılamaz.</i>';}
		elseif(mb_strlen($pass) > 16)	{ echo '<i class="false">Şifre 16 karakterden fazla olamaz.</i>';}
		elseif(mb_strlen($pass) < 6)	{ echo '<i class="false">Şifre 6 karakterden az olamaz.</i>';}
		else						{ echo '<i class="true-icon"></i>';}
	}
	
	
}
?>
