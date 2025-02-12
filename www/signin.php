<?php 

require_once 'Connections/mineConnect.php';
$login=$_POST['login'];
$password_confirm=md5($_POST['password_confirm']);
$select=mysqli_select_db($link,$db);
$query="SELECT * FROM `players` WHERE `login`='$login' AND `password`='$password_confirm'";
$check_user=mysqli_query($link,$query);
if($check_user){
	session_start();
	$user = mysqli_fetch_array($check_user);
	$_SESSION["user_id"] = $user["player_id"];
	header("Location: lk.php");
}  
else{
    header("Location: signin.php");
}
?>
