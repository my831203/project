<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">

    <div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
      <a class="item" href="index.php" style="color:#FFFFFF;">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php" style="color:#FFFFFF;">
        <i class="book icon"></i>
        教學
      </a>
      <a class="item" href="test.php" style="color:#FFFFFF;">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php" style="color:#FFFFFF;">
        <i class="shop icon"></i>
        商城
      </a>
	  <?php 
                    include("db.php");

                          if($_SESSION['id'] != null)
                          {
	                          echo"Hello&nbsp;&nbsp;&nbsp;".$_SESSION['id'];
							  echo"<div class=\"head-signin\">";
	                          echo"<h5><a href ="."logout.php"." align=\"right\"><i class=\"hd-dign\"></i><br>登出</a></h5>";
							  echo"</div>";

                          }
                          else
                          {
							  echo"<div class=\"head-signin\">";
	                          echo"<h5><a href="."log.php"."><i class=\"hd-dign\"></i>登入</a></h5>";
							  echo"</div>";
                          }
                      ?>
</div>
	

<div class="ui center aligned segment" >
  <div class="ui center aligned statistic" >
  <div class="label">
    <img src="img/bank.png" class="ui mini circular inline image">
		$
		<?php
			include("db.php");

			if($_SESSION['id'] != null)
			{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['id'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM member where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);

        echo "".$row[11]."<br><br>";
			}
        else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
}?>

    </div>



   <!-- <div class="row">
		<input type="image" class="ui tiny circular image" src="img/seeds.png" onClick="document.formname.submit();">
		<input type="image" class="ui tiny circular image" src="img/water.png" onClick="document.formname.submit();">
		<input type="image" class="ui tiny circular image" src="img/farmer.png" onClick="document.formname.submit();">
    </div>

<form method="post" name="money" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<input type="image" class="ui tiny circular image" name="1" value="20" src="img/seeds.png" onClick="document.money.submit();">
<input type="image" class="ui tiny circular image" name="2" value="40" src="img/water.png" onClick="document.money.submit();">
<input type="image" class="ui tiny circular image" name="3" value="50" src="img/farmer.png" onClick="document.money.submit();"> 
</form> 
<a href="javascript:document.form1.submit()"><img  src="XXX.jpg"></a>
<input  type="image"  name="submit_Btn"  id="submit_Btn"  img  src="XXX.jpg"  onClick="document.form1.submit()" >
<button  type="button"  name="submit_Btn"  id="submit_Btn" onClick="document.form1.submit()"><img  src="XXX.jpg"></button>
-->

  <div class="ui center aligned statistic" >
  <?php

  $sql = "SELECT * FROM member where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
       
  {
    


     if($row[12]<=5)
      {
        echo '<img src="img/1.png">';
      }
      elseif($row[12]<=10)
      {
        echo '<img src="img/2.png">';
      }
      else
      {
        echo '<img src="img/3.png">';
      }

     
  }
  ?>
  </div>


<div class="ui three bottom attached buttons">

<form class="ui large form" name="form1" method="post" action="seeds.php" >
<input type="image" class="ui tiny circular image" name="seeds" id="seeds" value="1000" src="img/seeds.png" onClick="document.form1.submit()" style="background-color:#f4f4f4;">
<input type="hidden" name="total" value="<?php echo $row[11];?>">
</form>
&nbsp;&nbsp;
<form class="ui large form" name="form2" method="post" action="water.php">
<input type="image" class="ui tiny circular image" name="water" id="water" value="3000" src="img/water.png" onClick="document.form2.submit()" style="background-color:#f4f4f4;">
<input type="hidden" name="total" value="<?php echo $item_total;?>">
</form>
&nbsp;&nbsp;
<form class="ui large form" name="form3" method="post" action="famer.php">
<input type="image" class="ui tiny circular image" name="farmer" id="farmer" value="5000" src="img/farmer.png" onClick="document.form3.submit()" style="background-color:#f4f4f4;"> 
<input type="hidden" name="total" value="<?php echo $item_total;?>">
</form>
</div>
</div>
</div>

</body>
</html>
