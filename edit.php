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
        <?php
            require 'config.php';
            require 'menu.php';
            // 找出該使用者 member 表資料

            if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();
            }
           
        ?>
    </div>
	<?php

require("db.php");
$sql="SELECT * from memder where id='$id' ";
$result=mysql_query($sql);

//require("db.php");
/* 顯示資料庫資料 */
//list($id,$pw,$name_1,$birth,$old,$sex,$name_2,$phone,$email,$address)


//echo "<form name=form1 method=post action=modify.php>";
while ($row=mysql_fetch_row($result))
{  ?> 
<form name=form1 method=post action=modify.php>
    <font color=#cc70DB>帳號 </font><input type=text name="id" size=4 style=color:#0000FF value="<? echo $row[1];?>" >&nbsp&nbsp
    <font color=#cc70DB>密碼</font><input type=text name="pw" style=color:#0000FF ><? echo $row[2];?></input><br>
    <font color=#cc70DB>孩童姓名 </font><input type=text name="name_1" style=color:#0000FF ><? echo $row[3];?></input>&nbsp&nbsp
    <font color=#cc70DB>生日 </font><input type=text name="birth" size=10 style=color:#0000FF ><? echo $row[4];?></input>&nbsp&nbsp<br>
    <font color=#cc70DB>年齡 </font><input type=text name="old" size=10 style=color:#0000FF ><? echo $row[5];?> </input>&nbsp&nbsp
    <font color=#cc70DB>性別</font><input type=text name="sex" size=10 style=color:#0000FF ><? echo $row[6];?> </input><br>&nbsp&nbsp
    <font color=#cc0000>父母姓名</font><input type=text name="name_2" size=10 style=color:#0000FF ><? echo $row[7];?> </input>&nbsp&nbsp
    <font color=#cc0000>電話 </font><input type=text name="phone" size=10 style=color:#0000FF ><? echo $row[8];?> </input><br>&nbsp;&nbsp; &nbsp&nbsp
    <font color=#cc0000>e-mail</font><input type=text name="email" size=10 style=color:#0000FF ><? echo $row[9];?> </input>&nbsp&nbsp
    <font color=#009900>地址</font></b><input type=text name="address" size=10 style=color:#0000FF value="<? echo $row[10];?>" ><br>&nbsp&nbsp&nbsp&nbsp&nbsp

 <? echo "<hr color=#aa0066 size=2>";

}
?>
</p>
<p align="center">

<input type="submit" name="Submit" value="修改" style="font-size: 14pt; color: #0000FF; background-color: #33CC33">
</form>
</body>
</html>
