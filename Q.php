<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","root",
                       "12345678","play")
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_query($link, 'SET NAMES utf8'); 
// 送出查詢的SQL指令
?>
<? 
	$id=$post["txt_id"]; 
	$ans=$post["txt_ans"]; 
	$choose=$post["rad_choose"]; 
	if ($id=="") //判斷是否第一次進入, 
	    $id=0; //初始化設為零 
	else    //已答題則判斷是否答對 
	    $_SESSION["YCount"]=($ans==$choose)?1:0;  
	 
	//取新題目 
	$sql="select Q_id, que, A,B,C,D from question where Q_id>$num limit 1"; 
	$result=mysql_query($sql); 
	//判斷是否有新題目 
	if (list($Q_id, $ques, $A,$B,$C,$D)=$result){ 
	    //有新題目處理選項亂數 
	    $choose=array($A,$B,$C,$D); 
	    shuffle($choose); //將陣列的順序弄混 
	    //顯示新題目 
	    echo "<form>"; 
	    echo "問題$Q_id:$que<br>"; 
	    for($i=0;$i<count($choose);$i++) 
	    echo "<input name='rad_choose' type='radio' value='.$choose[$i].'>".$choose[$i]; 
	    echo "<input type='submit' value='送出'>"; 
	    echo "<input name='txt_id' type='hidden' value='$id'>"; 
	    echo "<input name='txt_ans' type='hidden' value='$A'>"; 
	    echo "</form>"; 
	}else
	{ 
	    echo "沒有題目了!你共答對".$_SESSION["YCount"]."題"; 
	} 
?> 