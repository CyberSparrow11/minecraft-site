<!doctype html>
<html>
  <head>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Карта сервера</title>
		<link rel="stylesheet" href="style/shapkastyle.css">
    <style type="text/css">
      html, body, iframe {
	      height: 100%;
	      margin: 0;
	      padding: 0;
	      overflow: hidden;
        border: 0;
      }
    </style>
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
	
	<div style="width: 100%;height: 93vh;max-height: 93vh;">
		<iframe src="http://94.130.134.173:80" style="height: 100%;  width:100%; border: none" ></iframe>
	</div>
  </body>
</html>
