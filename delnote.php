<?php
	require_once ("Connections/mineConnect.php");
	$db="minecraft_project"; 
	$select_db = mysqli_select_db($link, $db) or die(mysql_error());

	$note_id = $_GET['note'];
	$querydelcomm = "DELETE FROM `comments` WHERE notes_note_id=$note_id";
	mysqli_query($link, $querydelcomm);
	
	$querydel = "DELETE FROM `notes` WHERE note_id=$note_id";
	mysqli_query($link, $querydel);
	header("Location: notes.php");
?>