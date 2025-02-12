<?php require_once('Connections/mineConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_info = 20;
$pageNum_info = 0;
if (isset($_GET['pageNum_info'])) {
  $pageNum_info = $_GET['pageNum_info'];
}
$startRow_info = $pageNum_info * $maxRows_info;

$db = "minecraft_project";

mysqli_select_db($link, $db);
$query_info = "SELECT login, is_online, last_online, `role` FROM players ";

$user_search = $_GET["search"];
if($user_search){
	$user_search = str_replace(',', ' ', $user_search);
	$where_clause= "";
	$search_words = explode(' ', $user_search);
	foreach($search_words as $word){
		$where_list[] = " login LIKE '%$word%' ";
	}
	$where_clause = implode (' OR ', $where_list); 
	if(!empty($where_clause)){
		$query_info .= " WHERE ".$where_clause;
	}
}
$query_info .=  "ORDER BY is_online DESC";

$query_limit_info = sprintf("%s LIMIT %d, %d", $query_info, $startRow_info, $maxRows_info);
$info = mysqli_query($link, $query_limit_info) or die(mysqli_error());
$row_info = mysqli_fetch_assoc($info);

if (isset($_GET['totalRows_info'])) {
  $totalRows_info = $_GET['totalRows_info'];
} else {
  $all_info = mysqli_query($link, $query_info);
  $totalRows_info = mysqli_num_rows($all_info);
}
$totalPages_info = ceil($totalRows_info/$maxRows_info)-1;

$queryString_info = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_info") == false && 
        stristr($param, "totalRows_info") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_info = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_info = sprintf("&totalRows_info=%d%s", $totalRows_info, $queryString_info);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style/main.css">
	    <link rel="stylesheet" href="style/shapkastyle.css">
    <link rel="stylesheet" href="style/table.css">
<title>Информация об игроках</title>
</head>

<body>
	
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
	<br>
	
	<div class="p">
		<h1 class="h1">Информация об игроках</h1>
		<form name="playersearch" method="get">
			<input type="text" name="search" required>
			<input type="submit" value="Найти">
			<input type="button" onclick="window.location='http://localhost/info.php'" value="Сбросить">
		</form>
		
		<br>
		<a class="a" href="<?php printf("%s?pageNum_info=%d%s", $currentPage, 0, $queryString_info); ?>">На первую</a> |
		<a class="a" href="<?php printf("%s?pageNum_info=%d%s", $currentPage, max(0, $pageNum_info - 1), $queryString_info); ?>">Предыдущая</a> | 
		<a class="a" href="<?php printf("%s?pageNum_info=%d%s", $currentPage, min($totalPages_info, $pageNum_info + 1), $queryString_info); ?>">Следующая</a> | 
		<a class="a" href="<?php printf("%s?pageNum_info=%d%s", $currentPage, $totalPages_info, $queryString_info); ?>">На последнюю</a>
	</div>
	
	<br>
	<br>
	
<table width="450">
	<tr><td width="108">Ник</td><td width="111">Роль</td><td width="215">Статус онлайна</td></tr>
  <?php do { ?>
  <tr>
    <th><?php echo $row_info['login']; ?></th>
    <th><?php echo $row_info['role']; ?></th>
    <th><?php if($row_info['is_online']) echo "Online"; 
			  else echo $row_info['last_online']; ?></th>
  </tr>
  <?php } while ($row_info = mysqli_fetch_assoc($info)); ?>
  </table>
	
</body>
</html>
<?php
mysqli_free_result($info);
?>