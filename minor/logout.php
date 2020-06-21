<?php
if($_SESSION['wpID']){
unset($_SESSION['wpID']);
}
session_destroy();
Header ("Location: $url");
?>