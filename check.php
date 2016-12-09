<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>花花 後臺</title>
<style type="text/css">
.mid{
    vertical-align:middle;
}
.fr{
margin:0;
padding:0;
font-size:15px;
list-style:none;}
#main{
margin:0 auto;}
#ma_left{
width:100px;
height:400px;
float:left;}
#ma_right{
width:500px;
float:left;} 
</style>
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
$sql = "select * from question";//查詢整個表單
  $result = mysql_query($sql) ; ?>
  <font size="12" color="#FF6633">題庫管理</font>
  <table width="1000" border="1" align="center">
  <td>題目編號</td>
  <td>題目</td>
  <td>選項A</td>
  <td>選項B</td>
  <td>選項C</td>
  <td>選項D</td>
  <td>正確答案</td>
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
  </tr>
  <?php }?>
  </table>
    <form name="form" method="post" action="add.php">
<p align=center>
題目：<input type="text" name="que" /> <br>
<p align=center>
選項A：<input type="text" name="A" /> <br>
<p align=center>
選項B：<input type="text" name="B" /> <br>
<p align=center>
選項C：<input type="text" name="C" /> <br>
<p align=center>
選項D：<input type="text" name="D" /> <br>
<p align=center>
正確答案：<input type="text" name="ans" /> <br>
<input type="submit" name="button" value="確定" />
</form>

    <br><a href="deleteQ.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;刪除題目</a>
  </div> 
  </div>
  
</body>
</html>