<?php 
if($_POST){

$id= $_POST['userID'];
$webSignalID= $_POST['webSignalID'];



		$userStatus = $db->prepare("select * from wpaccount where wpID=?");
	$userStatus->execute(array($id));

		if($userStatus->rowCount() !=0)
		{

			$query = $db->prepare("UPDATE wpaccount SET webSignalID=?  WHERE  wpID=? ");

			if($insert=$query->execute(array($webSignalID,$id))){
			echo '1';
			}else{
			echo '0';
			}

		}else{
			echo 'hata';
		}

}

?>