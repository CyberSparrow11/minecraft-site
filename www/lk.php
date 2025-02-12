<?php
	if (!isset($_SESSION)) {
  		session_start();
	}
	if(!$_SESSION['user_id']){
		header("Location: enter.html");
	}
?>

<!doctype html>
<html>
	<?php require_once("Connections/mineConnect.php");
		$db = mysqli_select_db($link,"minecraft_project");
		$user_id = $_SESSION['user_id'];
		$query = "SELECT * FROM `players` WHERE `player_id` =  $user_id";
		$query_user = mysqli_query($link,$query);
		$user_data = mysqli_fetch_array($query_user);
	
		if($user_data['role'] == "player") $role = "Игрок";
		else if($user_data['role'] == "moderator") $role = "Модератор";
		else $role = "Админ";
	?>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Личный кабинет</title>
		<link rel="stylesheet" href="style/shapkastyle.css">
		<link rel="stylesheet" href="style/kkk.css">\
	<link rel="stylesheet" href="style/main.css">
</head>

<body>
		<?php 
			if(isset($_SESSION["user_id"])){
				$lk = "lk.php";
			}
			else{
				$lk = "enter.html";
			}
		?>
		<div>
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
		</ul>
	</div>
	
	<p>
		Work in progress...
		<h3><?php echo $user_data['login']; ?></h3>
        Статус: <?php echo $user_data['status_donate']; ?> <br>
		Роль: <?php echo $role; ?><br>
	 <a class="a" href="exit.php">Выход</a>
	</p>
	
</body>
</html>