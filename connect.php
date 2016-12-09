<?php session_start(); ?>
<?php

include("db.php");
$id = $_POST['id'];
$pw = $_POST['pw'];



$sql = "SELECT * FROM member where id = '$id' AND pw = '$pw'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);




if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
	$_SESSION['id'] = $id;
	$_SESSION['num'] = $num;
	
	if($row[1] == $id && $row[2] == $pw)
	{
        //將帳號寫入session，方便驗證使用者身份
          $_SESSION['id'] = $id; 
		
        echo '<script>alert("登入成功"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	else{
		echo '<script>alert("登入失敗"); </script>';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=log.php>';
				
		}
}
else
{
        echo '<script>alert("登入失敗"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=log.php>';
}
