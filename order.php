<?php
header('Content-type: text/html; charset=utf-8');


session_start();




?>
<html>
<head>
    <title>TLH訂單</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
<script type="text/javascript"> 

function atm() 

{ 
 alert("銀行名稱：童樂會銀行\n帳號：1234-65789-5566\n請記得保留明細！");
} 
function deliever() 

{ 
 alert("送貨員於遞送前一小時將會連絡您！\n請不要拒接沒看過的號碼！");
} 
</script> 
</head>

<body>
<p></p>

    <div class="ui labeled icon menu">
      <a class="item" href="index.php">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php">
        <i class="book icon"></i>
        教學
      </a>
      <a class="item" href="test.php">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php">
        <i class="shop icon"></i>
        商城
      </a>

    </div>
    
<div class="right_main">
<div class="product">
<div class="product_b_body">
<font size="+3">訂單確認</font>
<form id="myform" action="sent_finish.php" method="post"
	onsubmit="return checkForm();">
<div class="shopping">
<div class="shopping_body">
<table width="100%" border="0" cellpadding="6" cellspacing="0"
	id="mytable" >
	<tr>
		<td width="43%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">商品名稱</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">價格</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">數量</td>

	</tr>
	<?php

	$checkcount = 0;
	if ($Myitems)
	{
		foreach ($Myitems as $key => $Myitem)
		{
			$checkcount ++;
			$background  = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":"";
			//var_export($Myitem);
			?>
	<tr id="item_<?php echo $Myitem->_sn;?>">
		<td <?php echo $background;?>><input type="hidden"
			name="product" value="<?php echo $Myitem->_name;?>"><?php echo $Myitem->_name; ?></td>
		<td <?php echo $background;?>><input type="hidden"
			name="money" value="<?php echo $Myitem->_price;?>"><?php echo $Myitem->_price; ?>元</td>
		<td <?php echo $background;?>><input type="hidden"
			name="num" value="<?php echo $Myitem->_quantity;?>"><?php echo $Myitem->_quantity;?></td>
	</tr>
	<?php
		}
	}
	else{
		?>
	<tr>
		<td bgcolor="#e7e7e7" colspan="4">目前無任何購物資料</td>
	</tr>
	<?php
	}
	?>
</table>
						<br><br>寄送人姓名：<br>&nbsp;<input type="text" name="name" size="50" /> <br>
						寄送地址：<br>&nbsp;<input type="text" name="address" size="50"/> <br>
						寄送人電話：<br>&nbsp;<input type="text" name="phone" size="50"/> <br>
					 	寄送人信箱：<br>&nbsp;<input type="text" name="email" size="50"/> <br>
                        付款方式：<br>&nbsp;<input type="radio" name="pay_way" value="ATM" onclick="atm()"> ATM轉帳
                                        <input type="radio" name="pay_way" value="貨到付款" onclick="deliever()"> 貨到付款<br>
						<br><input type="submit" name="button" value="送出" size="50"/>
</div>
</div>

</form>
</div>
</div>
</div>
</body>
</html>
