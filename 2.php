<html> 
	<head> 
	<title>隱藏欄位的使用</title> 
	</head> 
	<body> 
	<center> 
	<font size = 5 color = blue>隱藏欄位的使用</font> 
	</center> 
	<hr> 
	<p></p> 
	<?php  
	if(!$_POST['time']){ 
	?> 
	   <form action="" method=post name=form1> 
	    <input type="hidden" name="time" value="<?= time(); ?>"> 
	        <?php  //第一題?> 
	    <p>巴拿馬運河連接的是那兩大洋?</p> 
	    <p> 
	        <input type="radio" name=rdoQ[0] value=1>太平洋與大西洋 
	        <input type="radio" name=rdoQ[0] value=2>大西洋與印度洋 
	        <input type="radio" name=rdoQ[0] value=3>印度洋與太平洋 
	    </p> 
	 
	        <?php //第二題?> 
   <p>馬雅文明位於那一洲?</p> 
   <p> 
	        <input type="radio" name=rdoQ[1] value=1>北美洲 
	        <input type="radio" name=rdoQ[1] value=2>南美洲 
	        <input type="radio" name=rdoQ[1] value=3>歐洲 
	        <input type="radio" name=rdoQ[1] value=4>亞洲 
	        <input type="radio" name=rdoQ[1] value=5>非洲 
	    </p> 
	 
        <?php //第三題?> 
    <p>美國的首都是那一個城市?</p> 
	    <p> 
	        <input type="radio" name=rdoQ[2] value=1>紐約 
	        <input type="radio" name=rdoQ[2] value=2>舊金山 
	        <input type="radio" name=rdoQ[2] value=3>西雅圖 
	        <input type="radio" name=rdoQ[2] value=4>華盛頓 
	    </p> 
 
	        <?php //第四題?> 
	    <p>位於臺灣與菲律賓間的海峽是?</p> 
	    <p> 
	        <input type="radio" name=rdoQ[3] value=1>臺灣海峽 
	        <input type="radio" name=rdoQ[3] value=2>直布羅陀海峽 
	        <input type="radio" name=rdoQ[3] value=3>麻六甲海峽 
	        <input type="radio" name=rdoQ[3] value=4>巴士海峽 
	    </p> 
	 
        <?php //第五題?> 
	    <p>阿里山位於臺灣的那個縣?</p> 
	    <p> 
        <input type="radio" name=rdoQ[4] value=1>嘉義縣 
	        <input type="radio" name=rdoQ[4] value=2>台北縣 
	        <input type="radio" name=rdoQ[4] value=3>雲林縣 
	        <input type="radio" name=rdoQ[4] value=4>屏東縣 
	    </p> 
	 
	    <input type="submit" value="我答完了" name=submit> 
	   </form> 
	<?php  
	//若time控制項有傳出值表示應進行答案的計算 
	} else { 
	//輸出計算所得的答題所花時間 
	$timediff = time() - $_POST['time'] ; 	
	$rightans = 0 ; //計算答對的題數 
	$aryans = array("1","2","4","4","1") ;  //儲存正確答案的陣列 
	 
	foreach ($_POST['rdoQ'] as $key => $rs){ 
	    if($rs == $aryans[$key]){ 
	        $rightans = $rightans + 1 ;  //答對題數加 1 
	        $txt = '<font color="green">對</font>'; 
	    } else { 
	        $txt = '<font color="red">錯</font>'; 
	    } 
	    echo '第'. ++$i .'題您答'.$txt.'了<br>'; 
	} 
	?> 
	    <p></p> 
	    五題中您共答對了 
	    <font color = red> 
	    <?php //輸出答對的題數 
	    echo $rightans ;?> 
	    </font> 
	    題, 花了 
	    <font color = red> 
	    <?php  
	    echo $timediff ; ?> 
	    </font> 
	    秒 
	    </h3> 
	<?php 
	} 
	?> 
	</body> 
	</html> 