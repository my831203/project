
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
 //資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "play";
//資料庫管理者帳號
$db_user = "wenlly";
//資料庫管理者密碼
$db_passwd = "12345678";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
 
 $product =$_REQUEST['product'];
 $num = $_REQUEST['num'];
 $money = $_REQUEST['money'];
 $name = $_REQUEST['name'];
 $address = $_REQUEST['address'];
 $phone = $_REQUEST['phone'];
 $email = $_REQUEST['email'];
 $pay_way = $_REQUEST['pay_way'];


   
 $sql_insert = "INSERT INTO book(product, num, money, name, address, phone, email, pay_way) VALUES ('$product', '$num', '$money', '$name', '$address', '$phone', '$email', '$pay_way') ";
 
 $sql_insert2 = "INSERT INTO income(class, detail, price) VALUES ('訂單', '$product', '$money'*'$num') ";
 
 $sql_update = "UPDATE `product` SET `amount` = amount-'$num'  WHERE `name` = '$product' ; ";
 
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  $result2 = mysql_query($sql_update) or die('MySQL update error');
  $result3 = mysql_query($sql_insert2) or die('MySQL insert2 error');
  
  $sql_query = "select * from book";
  $result = mysql_query($sql_query) or die('MySQL query error');
  //$result2 = mysql_query($sql_query) or die('MySQL query error');
  header("refresh:0 ; url=shop.php"); 
  echo "<script>alert('訂購成功！');</script>"; 
  //header( "location:product2.php");
  
?>


