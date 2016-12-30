<?php session_start(); ?>
<html>
<head>
    <title>題庫管理</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">

<img width="100%"src="img/lo.jpeg">
<?php 
                    include("db.php");

                          if($_SESSION['teacher_id'] != null)
                          {
                            echo"<center>&nbsp;&nbsp;你好&nbsp;&nbsp;&nbsp;".$_SESSION['teacher_id']."&nbsp;&nbsp;&nbsp;老師<br>";
                echo"<div class=\"head-signin\">";
                            echo"<br><button class=\"ui olive inverted tiny button\" onclick=\"location.href='logout_t.php'\"><h5>登出</h5></button>";
                echo"</div>";

                          }
                          else
                          {
                echo"<div class=\"head-signin\">";
                            echo"<h5><a href="."teacher.php"."><i class=\"hd-dign\"></i>登入</a></h5>";
                echo"</div>";
                          }
?>

          <?php
    //$teacher_id = $_SESSION['teacher_id'];
 $db_server = "localhost";
 $db_name = "play";
 $db_user = "root";
 $db_passwd = "12345678";
 if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");
 mysql_query("SET NAMES utf8");
 if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
//mysql_query($sql);
$sql = "select * from question";//查詢整個表單
  $result = mysql_query($sql) ; ?>
 <br>
  <br>

<div class="center aligned column" >
<div class="ui aligned  center aligned grid" >
<div class="ui segment">
      <form class="ui unstackable table" >
      <div class="ui stacked segment"><h2 class="ui header">題庫管理</h2>
      <table >
      <thead>
        <tr><th>題號</th>
        <th>題目</th>
        <th>選項A</th>
        <th>選項B</th>
        <th>選項C</th>
        <th>選項D</th>
        <th>正確答案</th>
        <th>答錯次數</th></tr>
      </thead>

        <?php while($row = mysql_fetch_array($result))
        {//印出資料 ?>
        <tr>
        <td><?php echo $row['Q_id'];?></td>
        <td><?php echo $row['que']; ?></td>
        <td><?php echo $row['A'];?></td>
        <td><?php echo $row['B'];?></td>
        <td><?php echo $row['C'];?></td>
        <td><?php echo $row['D'];?></td>
        <td><?php echo $row['ans'];?></td>
        <td><?php echo $row['err'];?></td>
        <td>
        <?php if ($row['teacher_id']==$_SESSION['teacher_id'])
        {?>
      	 
         <a href="deleteQ.php?Q_id=<?=$row['Q_id']?>"> 刪除 </a> 
       
       <?php
         }
         ?>
        </td>
      	 
      	   <?php }?>
        </tr>

      </table>
      </div>
      </form>
</div>
</div>
</div>


        <h1 class="ui header"> </h1>
        <h1 class="ui header"> </h1>


<div class="center aligned column" >
    <div class="ui aligned center aligned grid">
        <div class="ui segment">
            <form class="ui large form" name="form" method="post" action="add.php">
              <div class="ui stacked segment">
                <h2 class="ui header">新增題目</h2>
                <div class="field">
                <div class="ui left icon input">
                    <i class="help icon"></i>
                    <input type="text" name="que" required size=40 placeholder="問題"/>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <a>A&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <input type="text" name="A" required size=40 placeholder="答案A"/> 
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <a>B&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <input type="text" name="B" required size=40 placeholder="答案B"/>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <a>C&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <input type="text" name="C" required size=40 placeholder="答案C"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <a>D&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <input type="text" name="D" required size=40 placeholder="答案D"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <label>答案</label>
                    <input type="radio" name="ans" value="A" id="A" required size=40 placeholder="ans"/>A&nbsp;&nbsp;
					<input type="radio" name="ans" value="B" id="B" required size=40 placeholder="ans"/>B&nbsp;&nbsp;
					<input type="radio" name="ans" value="C" id="C" required size=40 placeholder="ans"/>C&nbsp;&nbsp;
					<input type="radio" name="ans" value="D" id="D" required size=40 placeholder="ans"/>D&nbsp;&nbsp;<br>
                </div>
                </div>
                <input class="ui teal button" type="submit" name="submit" value="遞送" style="width:80px"/>&nbsp;&nbsp;
                 <input  type="hidden" name="teacher_id" value="$_SESSION['teacher_id']" style="width:80px"/>&nbsp;&nbsp;
                <input class="ui teal button" type="reset" name="reset" value="清除" style="width:80px"/>&nbsp;&nbsp;
            </div>
          </form>
      </div>
    </div>
</div> <br> <br> <br> <br>



</body>
</html>