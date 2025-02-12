<?php
ob_start();
require_once("Connections/mineConnect.php");
$data = ob_get_clean();
ob_end_clean();
$result=$_GET['status_donate'];
$login=$_POST['login'];
$donate=$_POST['status_donate'];
$select=mysqli_select_db($link,$db);
$sql = "UPDATE players
SET status_donate ='$donate'
WHERE login= '$login'";
mysqli_query($link, $sql);
if(!mysqli_query($link, $sql)) {
echo(mysqli_error($link));
}
header("Location: lk.php");
?>