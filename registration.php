<?php
session_start();
ob_start();
require_once 'Connections/mineConnect.php';
$data = ob_get_clean();
ob_end_clean();
$result=$_GET['role'];
$login=$_POST['login'];
$password=$_POST['password'];
$email=$_POST['email'];
$role = $_POST['role'];
$password=md5($password);
$select=mysqli_select_db($link,$db);
if($login && $password && $email){
	$sql = "INSERT INTO players (login,password, email,role) VALUES ('$login', '$password', '$email','$role')";
	if(!mysqli_query($link, $sql)) {
		echo(mysqli_error($link));
	}

    $query="SELECT * FROM `players` WHERE `login`='$login'";
    $check_user=mysqli_query($link,$query);
    $user = mysqli_fetch_array($check_user);
	
	$player_id = $user["player_id"];
    $_SESSION["user_id"] = $player_id;
	$query_online = "UPDATE `players` SET is_online = 1 WHERE player_id = $player_id";
	mysqli_query($link,$query_online);
	
	 header("Location: index.php");
}

?>