<?php session_start(); ?>
<!--增加金幣-->
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <?php
 $db_server = "localhost";
 $db_name = "play";
 $db_user = "root";
 $db_passwd = "12345678";
$id = $_SESSION['id'];

 if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");
 mysql_query("SET NAMES utf8");
 if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
//mysql_query($sql);
$sql = "select * from member where id = '$id' ";//查詢整個表單
$result = mysql_query($sql) ;
while($row = mysql_fetch_array($result))
{
$tota= $_POST['tota'];
$coin=  $row[8];
$coin2= $coin+$tota;

    $sss="UPDATE member SET coin='$coin2' WHERE id = '$id' " ;

        if(mysql_query($sss))
        {			
                //echo '新增成功!';	
            echo "<script>window.alert(\" 目前金幣總計".$coin2."\"),location.href=\"test.php\";</script>";
        }
        else
        {
               echo "失敗";
			   //echo '<script>alert("失敗"); </script>';
               echo '<meta http-equiv=REFRESH CONTENT=1;url=test.php>';
			   //header( "location:index.php");
        }
	mysql_close();

		
		//echo"一筆結束";
		
		
}
//header( "location:index.php");  //回index.php
		




?>