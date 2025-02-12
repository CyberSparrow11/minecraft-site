<?php
if (!isset($_SESSION)) {
    session_start();
}
    require_once 'Connections/mineConnect.php';
    $select=mysqli_select_db($link,$db);
    $player_id = $_SESSION["user_id"];
    $date = date('Y-m-d H:i:s');

    $query_last_online = "UPDATE `players` SET last_online = '$date' WHERE player_id = '$player_id'";
    mysqli_query($link, $query_last_online) or die(mysqli_error($link));

    $query_is_online = "UPDATE `players` SET is_online = 0 WHERE player_id = $player_id";
    mysqli_query($link, $query_is_online) or die(mysqli_error($link));

    session_destroy();
    header("Location: index.php");
?>