<html>
<body>
<?php 
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","wenlly",
                       "12345678","play")
        or die("無法開啟MySQL資料庫連接!<br/>");

/*---$sql = "SELECT * FROM exam where exam_id <=25"; // 指定SQL查詢25字串--*/
echo "$sql <br/>";
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
 
// 送出查詢的SQL指令
?>
<form method='get' action='test.php' name='t'>

<?php

 switch($_POST["quest"])
	{
	case "A":
		$chr = "A";
		break;
	case "B":
        $chr = "B";
		break;
    case "C":
        $chr = "C";
     	break;	
	case "D":
        $chr = "D";
     	break;	
	}
if($_POST["quest"] == $ans)
{
        //新增資料進資料庫語法
        
                echo '新增成功!';

}
else
{
        echo '再來一次!';

}	 
 
?>
<?php
 
 ?>
您輸入的答案為:  <?php echo print_r($_POST["quest"],true);?>

<br>


你共答對了 <?php echo "0" ?> 題。



</form>
</body>
</html>