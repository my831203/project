<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
</head>

<body>
    <p></p>

    <div class="ui labeled icon menu">
      <a class="item" href="index.php">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php">
        <i class="book icon"></i>
        教學
      </a>
      <a class="item" href="test.php">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php">
        <i class="shop icon"></i>
        商城
      </a>
      <div class="right menu">
      <a class="item" href="MyCar.php">
        <i class="In Cart icon"></i>
        購物車
      </a>
      </div>

    </div>

    <div id="main">
    <div class="cl">&nbsp;</div>
    
    <!-- Content -->
    <div id="content">
    <div id="fade" style="width:450px; text-align:center;"></div>
    
    </div>
    <!-- End Content -->
    <!-- table border -->
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
  $result = mysql_query($sql) ;
  $name = mysql_query("select name from product order by id_P ASC");
$price = mysql_query("select price from product order by id_P ASC");
$amount = mysql_query("select amount from product order by id_P ASC");
$category = mysql_query("select category from product order by id_P ASC");
?>

<form method="post" action="cart.php">
<div class="ui center aligned statistic" >
<table align="center" rules="none">
<tbody>


<div class="ui special cards" >

  <div class="card" >
    <div class="blurring dimmable image">
      <img src="img/p1.png">
    </div>
    <div class="content">
      <a class="header">名稱：<?php echo mysql_result($name,0);?></a>
      <div class="meta">
        <span class="date">介紹：<?php echo mysql_result($category,0);?></span>
      </div>
    </div>
    <div class="extra content">
      <a><i class="users icon"></i>價格：$ <?php echo mysql_result($price,0);?></a>
      <span class="right floated">剩餘數量：<?php echo mysql_result($amount,0);?>個</span>
    </div>
    <div class=" center aligned extra content" >
    <input type="button" name="button0" class="ui button" style="cursor: pointer;"  onClick="location='addItem.php?sn='0';" value="加入購物車">
    </div>
  </div>

  <div class="card" >
    <div class="blurring dimmable image">
      <img src="img/p2.png">
    </div>
    <div class="content">
      <a class="header">名稱：<?php echo mysql_result($name,1);?></a>
      <div class="meta">
        <span class="date">介紹：<?php echo mysql_result($category,1);?></span>
      </div>
    </div>
    <div class="extra content">
      <a><i class="users icon"></i>價格：$ <?php echo mysql_result($price,1);?></a>
      <span class="right floated">剩餘數量：<?php echo mysql_result($amount,1);?>個</span>
    </div>
    <div class=" center aligned extra content" >
    <input type="button" name="button0" class="ui button" style="cursor: pointer;" onClick="location='addItem.php?sn='1';" value="加入購物車">
    </div>
  </div>

  <div class="card" >
    <div class="blurring dimmable image">
      <img src="img/p3.png">
    </div>
    <div class="content">
      <a class="header">名稱：<?php echo mysql_result($name,2);?></a>
      <div class="meta">
        <span class="date">介紹：<?php echo mysql_result($category,2);?></span>
      </div>
    </div>
    <div class="extra content">
      <a><i class="users icon"></i>價格：$ <?php echo mysql_result($price,2);?></a>
      <span class="right floated">剩餘數量：<?php echo mysql_result($amount,2);?>個</span>
    </div>
    <div class=" center aligned extra content" >
    <input type="button" name="button0" class="ui button" style="cursor: pointer;"  onClick="location='addItem.php?sn='2';" value="加入購物車">
    </div>
  </div>

  <div class="card" >
    <div class="blurring dimmable image">
     <img src="img/p4.png">
    </div>
    <div class="content">
      <a class="header">名稱：<?php echo mysql_result($name,3);?></a>
      <div class="meta">
        <span class="date">介紹：<?php echo mysql_result($category,3);?></span>
      </div>
    </div>
    <div class="extra content">
      <a><i class="users icon"></i>價格：$ <?php echo mysql_result($price,3);?></a>
      <span class="right floated">剩餘數量：<?php echo mysql_result($amount,3);?>個</span>
    </div>
    <div class=" center aligned extra content" >
    <input type="button" name="button0" class="ui button" style="cursor: pointer;"  onClick="location='addItem.php?sn='3';" value="加入購物車">
    </div>
  </div>


</div>



</tbody>
</table>
</div>
</form>



</body>
</html>