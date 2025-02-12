<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/kkk.css">
	<link rel="stylesheet" href="style/shapkastyle.css">
    <title>Редактировать сообщение</title>
</head>

<body>
<?php require_once ("Connections/mineConnect.php");
$db="minecraft_project";
$select_db = mysqli_select_db($link, $db) or die(mysql_error());
?>
<?php
if(isset($_SESSION["user_id"])){
    $lk = "lk.php";
}
else{
    $lk = "enter.html";
}
?>
<header>
   	<ul class="shapkaul">
			<li class="shapkali"><a href="index.php" class="shapkaA"><img src="style/pic/logo.png" class="logo"></a></li>
			<li class="shapkali"><a href="index.php" class="shapkaA">О сервере</a></li>
			<li class="shapkali"><a href="info.php" class="shapkaA">Наши Игроки</a></li>
			<li class="shapkali"><a href="map.php" class="shapkaA">Карта сервера</a></li>
			<li class="shapkali"><a href="notes.php" class="shapkaA">Лента сообщений</a></li>
			<li class="shapkali"><a href="<?php echo $lk?>" class="shapkaA">Личный кабинет</a></li>
			<li class="shapkali"><a href="table.php" class="shapkaA">Донат</a></li>
			<li class="shapkali"><a href="help.php" class="shapkaA">Контакты</a></li>
			<li class="shapkali"><a href="help.php" class="shapkaT">8 (985) 945-56-38</a></li>
		</ul><br><br>
</header>
<?php
    $note_id = $_GET["note"];
    $note_query = "SELECT note_topic, note_article FROM `notes` WHERE note_id = $note_id";
    $query_res = mysqli_query($link, $note_query) or die(mysql_error());
    $note = mysqli_fetch_array($query_res);

?>

<a class="a" href="note.php?note=<?php echo $_GET["note"]?>">Назад</a>
<form name="noteupdate" method="post">
    Редактировать сообщение:<br>
    Тема: <input type="text" name="note_topic" value="<?php echo $note['note_topic']?>" required><br>
    <textarea name="note_text" required><?php echo $note['note_article']?></textarea>
    <input type="submit">
</form>

<?php
    $note_topic = $_POST['note_topic'];
    $note_article = $_POST['note_text'];
    $query_update = "UPDATE `notes` SET note_topic = '$note_topic', note_article='$note_article' WHERE note_id = $note_id";
    if($note_topic && $note_article){
		mysqli_query($link, $query_update) or die(mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=note.php?note=$note_id'>";
	} 
?>
</body>