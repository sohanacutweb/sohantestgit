<?php
require_once("config.php");
if(isset($_POST['save_user'])){
	$pass = md5(trim($_POST['pass_word']));
	$check = mysqli_query($con,"INSERT INTO membership (first_name, last_name, 	email_addres, user_name, pass_word) VALUES('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email_addres']."','".$_POST['user_name']."','$pass')");
	header('location:register.php');
}
?>