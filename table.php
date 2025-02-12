<!doctype html>
<html>
<head>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Донат</title>
    <link rel="stylesheet" href="style/shapkastyle.css">
    <link rel="stylesheet" href="style/table.css">
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
     <h1 class="h1">Привилегии</h1>
    <table>
        <tr>
            <td>Услуги</td>
            <td>Base</td>
            <td>Pro</td>
            <td>Premium</td>
            <td>Gold</td>
            <td>Platinum</td>
        </tr>
        <tr>
            <th>Сохранение вещей и опыта после смерти или лива с PvP</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Сохранение морфов после смерти</th>
            <th>&#10060;</th>
            <th>Только броня</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность вернуться на место смерти</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Крафт и использование Больших рюкзаков</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность говорить от третьего лица</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность очистить инвентарь командой</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность подбирать картину, удерживая ПКМ и вращая колесико мыши</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Цветной префикс [Название группы] перед ником</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Цветной ник в Tab-листе</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Использование расширенных флагов для VIP игроков</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Использование Карьера </th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Использование Бура и Основы для бура </th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Крафт и использование Заполнителя </th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Установка персонального времени на сервере</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность исцелить себя командой</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность полетов на сервере</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность полетов в морфах на сервере</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность утолить голод командой</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность потушить себя командой</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность надеть блок на голову</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Возможность открыть виртуальный ПК</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#10060;</th>
            <th>&#9989;</th>
        </tr>
        <tr>
            <th>Цена услуги</th>
            <th>Бесплатно</th>
            <th>150р</th>
            <th>300р</th>
            <th>600р</th>
            <th>900р</th>
        </tr>
    </table>
    <form method="post" action="donate.php" class="choose">
        <label>Впишите ваш ник</label>
        <br>
        <input type="text" name="login"/>
        <br>
        <select name="status_donate">
            <option value="base">Base</option>
            <option value="pro">Pro</option>
            <option value="premium">Premium</option>
            <option value="gold">Gold</option>
            <option value ="platinum">Platinum</option>
        </select>
        <br>
        <input type="submit" value="Выбрать" name="submit_btn" />
    </form>
</body>
</html>
