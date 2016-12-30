<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name_1 = $_POST['name_1'];
$birth = $_POST['birth'];
$old = $_POST['old'];
$sex = $_POST['sex'];
$name_2 = $_POST['name_2'];

//搜尋資料庫資料
$sql = "SELECT * FROM member where id = '$id'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if( $pw == $pw2)
{
	if($id != null && $pw != null && $pw2 != null )
	{
        //新增資料進資料庫語法
        $sql = "insert into member (id, pw, name_1, birth, old, sex, name_2) values ('$id','$pw','$name_1', '$birth', '$old', '$sex', '$name_2' )";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
	}
	else{
        echo '再來一次!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
	}
}else{
	echo '密碼不一致!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>
