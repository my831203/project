<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

  require 'config.php';

    $id   = $_SESSION['id'];
    $but = $_POST['but'];
    $value = $_POST['value'];
  
    $sql =  "SELECT * FROM member where id = '$id' "; 
    //詢整個表單
    while($row = $sql->fetch_assoc())
      {
      $coin= $row['coin'];
      $touch= $row['touch'];
      }
    

if($coin>=$value)
{
//$row = mysql_fetch_row($result);	
    $link->query("UPDATE member SET coin = coin- $value , touch = touch+1 WHERE id = '$id' ") ;
			
                //echo '新增成功!';
		//	echo '<script>alert("澆水"); </script>'; 
            //echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
			   
}
 else
        {
               echo '<script>alert("錢不夠，多多加油!"); </script>';
        }
		
		
		//echo"一筆結束";
		
		

//header( "location:index.php");  //回index.php
		




?>