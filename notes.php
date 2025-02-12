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
	<title>Лента Сообщений</title>
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

	<br>
	<?php if(isset($_SESSION["user_id"])) echo '<a class="a" href="newnote.php">Написать статью</a>' ?>
	<center><form  name="usersearch" method="get">
		<input type="text" name="search" value="<?php echo $_GET['search']; ?>" required>
		<input type="submit" value="Найти">
		<?php echo '<input type="button" value="Сбросить" onclick="window.location=\'http://localhost/notes.php\'">' ?>
	</form></center>
	<br><br>
	<?php
		
	
		if($_GET["search"]){
			$query = "SELECT * FROM `notes`";
			$where_list = array();
			$user_search = $_GET['search'];
			$user_search = str_replace(',',' ',$user_search);
			$user_search = str_replace('  ',' ',$user_search);
			
			$search_words = explode(' ', $user_search);
			
			foreach($search_words as $word){
				$where_list[] = "note_article LIKE '%$word%'";
				$where_list[] = "note_topic LIKE '%$word%'";
			}
			$where_clause = implode (' OR ', $where_list);
			if (!empty($where_clause)){
				$query .=" WHERE $where_clause";
			} 
			$query .= " ORDER BY `note_id` DESC";
		}
		else{
			$query="SELECT * FROM `notes` ORDER BY `note_id` DESC";
			
		}
		$select_note=mysqli_query($link,$query);
		if(!mysqli_query($link,$query)) {
			echo mysqli_error($link);
		}
	
		else{
			while ($note = mysqli_fetch_array($select_note)){?>
	
			<div class="container">
				<a class="note" href="note.php?note=<?php echo $note['note_id']; ?>">
				<?php echo $note['note_topic'], "<br>";?></a> 
				<?php
			}
		}
	?> 
			</div>
	
</body>
</html>