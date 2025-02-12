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
	<link rel="stylesheet" href="style/shapkastyle.css">
	<title>Лента Сообщений</title>
</head>

<body>
	<?php  require_once ("Connections/mineConnect.php");
		$db="minecraft_project"; 
		$select_db = mysqli_select_db($link, $db) or die(mysql_error());
		$note_id = $_GET["note"];
		$query = "SELECT * FROM `notes` WHERE note_id = $note_id";
		$query_note = mysqli_query($link, $query) or die(mysql_error());
		$note = mysqli_fetch_array($query_note);

        $author_id = $note['players_player_id'];
        $query_author = mysqli_query($link, "SELECT login FROM `players` WHERE player_id = $author_id");
        $author = mysqli_fetch_array($query_author);
        $author_login =  $author['login'];
        $author_data = "<a href='info.php?search=".$author_login."'>".$author_login."</a>";
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
        $player_id = $_SESSION["user_id"];
        if($player_id){
            $query_role = "SELECT role FROM `players` WHERE player_id = $player_id";
            $temp = mysqli_fetch_array(mysqli_query($link, $query_role));
            $role = $temp["role"];
            if(($role == "admin" or $role == "moderator") or $_SESSION['user_id'] == $author_id){
                echo "<input type='button' onclick=deletenote() value='Удалить сообщение'><br>";
                echo "<a class='a' href='editnote.php?note=$note_id'>Редактировать сообщение</a><br>";
            }
        }
    ?>
	<script>
		function deletenote(){
			let del = confirm("Удалить сообщение?");
			if(del) window.location.href = window.location.href.replace("note.php","delnote.php");
		}
	</script>


	<?php
		echo "<h3>".$note["note_topic"]."</h3>","<br>";
        echo "Автор: ".$author_data."<br><br>";
		echo $note["note_article"];
	?>
    <?php
    if($_SESSION['user_id']){
        ?>
        <form name="comment" method="post" action="addcomment.php">
            Добавить комментарий:<br>
            <textarea name="comment_text" required></textarea>
            <input type="hidden" name="note_id" value="<?php echo $note_id ?>">
            <input type="submit">
        </form>
    <?php
    }
        ?>
    <?php
        $query_comments = "SELECT * FROM `comments` WHERE notes_note_id=$note_id";
        $comments = mysqli_query($link,$query_comments);
        if($comments){
            echo "Комментарии:<br>";
            while ($comment = mysqli_fetch_assoc($comments)){
                $comm_author_id = $comment['players_player_id'];
                $comm_author = mysqli_fetch_assoc(mysqli_query($link, "SELECT login FROM `players` WHERE player_id = $comm_author_id"));
                $comm_author_name = $comm_author['login'];

                $comm_author_data = "<a href='info.php?search=".$comm_author_name."'>".$comm_author_name."</a>";
                ?>

                <div>
                <?php echo $comm_author_data."<br>";
                echo $comment['comment_text']; ?>
                </div>

            <?php
            }
        }
    ?>
</body>
</html>