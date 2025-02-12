<?php
	if (!isset($_SESSION)) {
  		session_start();
	}
?>
<!doctype html>
<html>

	<head>
		
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Сервер</title>
		<link rel="stylesheet" href="style/shapkastyle.css">
		<link rel="stylesheet" href="style/kkk.css">
		
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
		
	<section> 
		<div class="container">
			<img src="style/pic/forest.jpg" alt="">
			<h3 >Добро пожаловать!</h3>
			<p> 
			Это наш сервер. Здесь вы сможете найти множество новых друзей и отлично провести время! Скорее начинайте игру!
			</p>
			<button onclick="window.location.href ='enter.html';">Стать игроком</button>
		</div>
	</section>
		<section>
		<ul class="ul_privil">
	<li class="privil">
		<a href="table.php" class="product">
			<div class="product-photo">
			<img src="style/pic/base.jpg" alt="">	
			</div>
			<h4>BASE</h4>
			<p>Играйте как обычный игрок, исследуя ванильный майнкрафт без привелегий.</p>
		</a>
	</li>
	<li class="privil">
		<a href="table.php" class="product"><div class="product-photo">
			<img src="style/pic/pro.jpg" alt="">
			</div>
				<h4>PRO</h4>
			<p>Играй как про, снимая все на гоупро, а если ты не про - ты не про.</p>
		</a>
	</li>
	<li class="privil">
		<a href="table.php" class="product"><div class="product-photo">
			<img src="style/pic/premium.jpg" alt="">
			</div>
				<h4>PREMIUM</h4>
			<p>Премиум игрок почитаем и уважаем всеми в стае, ты крутой.</p>
		</a>
	</li>
	<li class="privil">
		<a href="table.php" class="product"><div class="product-photo">
			<img src="style/pic/gold.jpg" alt="">
			</div>
			<h4>GOLD</h4>
			<p>Чисто золодце сервера, админы не дадут тебя в обиду, солнышко наше.</p>
		</a>
	</li>
	<li class="privil">
		<a href="table.php" class="product"><div class="product-photo">
			<img src="style/pic/platinum.jpg" alt="">
			</div>
			<h4>PLATINUM</h4>
			<p>Алмазный сет как стиль жизни, эти ребята знают толк в привелегиях.</p>
		</a>
	</li>
</ul>
	</section>
	
	</body>
	
</html>