<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?

$link  =mysqli_connect("localhost","root","12345678") or die("無法連接".mysql_error());  // 建立MySQL的資料庫連結

mysqli_select_db($link,"play")or die ("無法選擇資料庫".mysql_error()); // 選擇school資料庫

mysqli_query($link, 'SET CHARACTER SET utf8');

mysqli_query($link,  "SET collation_connection = 'utf8_general_ci'");

$Q_id=$_POST['Q_id']

echo $Q_id;

$sql ="DELETE FROM question WHERE Q_id='Q_id]'";  //刪除資料

mysqli_query($link,$sql)or die ("無法刪除".mysql_error()); //執行sql語法

mysql_close($link); //關閉資料庫連結

header( "location:check.php");  //回index.php

?>