<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>TLH購物中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
	
</head>
<body>

<div id="ma_right" >

<?php
 $db_server = "localhost";
 $db_name = "play";
 $db_user = "wenlly";
 $db_passwd = "12345678";
 if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");
 mysql_query("SET NAMES utf8");
 if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
mysql_query($sql);
$sql = "select * from product";//查詢整個表單
  $result = mysql_query($sql) ; ?>
 

  
  <form method="post" action="cartt.php"> 
  <table align="center">
  
  <?php while($row = mysql_fetch_array($result))
  {//印出資料 ?>
  <tr>
  <td>
  名稱：<?php echo $row['name'];?><br>
  價格：$ <?php echo $row['price']; ?><br>
  剩餘數量：<?php echo $row['amount'];?>個<br>
  介紹：<?php echo $row['category'];?><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt"  href='add_to_cart.php?id={$id}&name={$name}' value="加入購物車"> </td>
  <td></td>
  <td align="center"><?php echo '<img src="img/'.$row['img'].'" height="150" width="150">';?></td>
   </tr>
   <tr></tr>
     <tr><td align="center">---------------------------------------------------------------------</td></tr>
  <?php }?>


 
  


	
	
</body>
</html>