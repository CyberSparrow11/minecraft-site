<?php
require_once ('Connections/mineConnect.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = mysqli_select_db($link,"minecraft_project");
$note_topic = $_POST["note_topic"];
$note_text = $_POST["note_text"];
$player_id = $_SESSION["user_id"];
if($note_topic && $note_text && $player_id){
    $query = "INSERT INTO `notes` (note_topic, note_article, players_player_id) VALUES ('$note_topic', '$note_text', '$player_id')";
    mysqli_query($link, $query);
}
header("Location: notes.php",true);
?>