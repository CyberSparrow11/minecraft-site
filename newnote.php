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
    <title>Написатьь сообщение</title>
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


    <form name="comment" method="post" action="addnote.php">
        Добавить сообщение:<br>
        Тема: <input type="text" name="note_topic" required><br>
        <textarea name="note_text" required></textarea>
        <input type="submit">
    </form>

</body>
	</html>