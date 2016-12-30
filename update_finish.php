<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$link=mysqli_connect("localhost","root","12345678") or die("無法連接".mysql_error());  // 建立MySQL的資料庫連結

mysqli_select_db($link,"play")or die ("無法選擇資料庫".mysql_error()); // 選擇school資料庫

mysqli_query($link, 'SET CHARACTER SET utf8');

mysqli_query($link,  "SET collation_connection = 'utf8_general_ci'");


$id = $_SESSION['id'] ;
$sql = "update member set pw='$_POST[pw]' where id ='$id' ";
mysqli_query($link,$sql)or die ("無法更新".mysql_error()); //執行sql語法

mysql_close($link); //關閉資料庫連結

header( "location:user.php");  //回index.php
	
?>
		
