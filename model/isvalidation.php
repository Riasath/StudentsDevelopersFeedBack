<?php
	include_once("../class/authonication.php");
	$authonication = new Authonication;
	$authonication->setdata($_POST["email"],$_POST["password"]);
	
?>