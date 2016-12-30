<?php session_start(); ?>
<html>
<head>
    <title>會員管理</title>
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
    </div><br><br>

	 <div class="center aligned column" >
    <div class="ui aligned center aligned grid">
        <div class="ui segment">
            <form class="ui large form" name="form" method="post" action="update_finish.php">
              <div class="ui stacked segment">
                <h2 class="ui header">修改密碼</h2>
            
                <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="pw" required size=40 placeholder="密碼"/> <br>
                </div>
                </div>
         <!--       
        <div class="field">
                <div class="ui left icon input">
                    <i class="child icon"></i>
                    <input type="text" name="name_1" required size=40 placeholder="孩童姓名"/> <br>
                </div>
                </div>
        <div class="field">
                <div class="ui left icon input">
                    <i class="calendar icon"></i>
                    <input type="date" name="birth" required size=40 placeholder="生日"/> <br>
                </div>
                </div>
        <div class="field">
                <div class="ui left icon input">
                    <i class="empty heart icon"></i>
                    <input type="text" name="old" required size=40 placeholder="年齡"/> <br>
                </div>
                </div>
        <div class="field">
                <div class="ui left icon input">
          
                    <input type="radio" name="sex" value="boy" id="boy" required size=40 placeholder="性別"><label>男生</label>
          <input type="radio" name="sex" value="girl" id="girl" required size=40 placeholder="性別"><label>女生</label><br>
                </div>
                </div>
        <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="name_2" required size=40 placeholder="監護人姓名"/> <br>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="phone icon"></i>
                    <input type="text" name="phone" required size=40 placeholder="電話"/> <br>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="mail icon"></i>
                    <input type="email" name="email" required size=40 placeholder="電子信箱"/> <br>
                </div>
                </div>
        <div class="field">
                <div class="ui left icon input">
                    <i class="home icon"></i>
                    <input type="text" name="address" required size=40 placeholder="地址"/> <br>
                </div>
                </div>
                -->
                <input class="ui teal button" type="submit" name="submit" value="遞送" style="width:80px"/>&nbsp;&nbsp;
                <input class="ui teal button" type="reset" name="reset" value="清除" style="width:80px"/>&nbsp;&nbsp;
            </div>
          </form>
      
      </div>
    </div>
</div><br><br>
<?php
include("db.php");
if($_SESSION['id'] != null)
{
	$id = $_SESSION['id'];
	$sql = "select * from member where id='$id'";//查詢整個表單
	$result = mysql_query($sql) ; 
	$row = mysql_fetch_row($result)?>
 <br>
  <br><center>
<div class="center aligned column" >
<div class="ui aligned center aligned grid">
<table width="80%" class="ui celled padded table"><thead>

<tr><td colspan="7" size="24" ><center><h2><b>會員管理</b></h2></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>帳號</h4></td>
  <td><?php echo $row[1];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>密碼</h4></td>
  <td><?php echo $row[2]; ?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>孩童姓名</h4></td>
  <td><?php echo $row[3];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>生日</h4></td>
  <td><?php echo $row[4];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>年齡</h4></td>
  <td><?php echo $row[5];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>性別</h4></td>
  <td><?php echo $row[6];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>父母姓名</h4></td>
  <td><?php echo $row[7];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>電話</h4></td>
  <td><?php echo $row[8];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>e-mail</h4></td>
  <td><?php echo $row[9];?></td></tr>
  <tr><td class="collapsing"><h4><i class="help icon"></i>地址</h4></td>
  <td><?php echo $row[10];?></td></tr>

</table> </div></div> 
<?php }
else{
	echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}?>


<br><br><br><br>
</body>
</html>
