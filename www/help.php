<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Контакты</title>
	<link rel="stylesheet" href="style/shapkastyle.css">
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
	</div>
	
	<h2 class="h2">КОНТАКТЫ</h2>
	<p class="p">Для входа на сервер используйте ваш логин и пароль, под которыми вы регистрировались на сервере.</p><br>
	<p class="p">По любым возникшим вопросам обращаться:</p><br>
	<p class="p">По телефону: 8(800)555-35-35</p><br>
	<p class="p">На почту: example@example.com</p><br>
	<p class="p">Вконтакте: Minecraft Group </p><br>
	
</body>
</html>
