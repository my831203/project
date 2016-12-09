<?php
header('Content-type: text/html; charset=utf-8');

include "inc/class/Car.class.php";
session_start();

 

$MyCart = new Cart();

 
$Myitems = $MyCart->getAllItems();


?>
<html>
<head>
    <title>TLH購物車</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
    <script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/MyCar.js"></script>
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

    <div id="main">
    <div class="cl">&nbsp;</div>
    
    <!-- Content -->
    <div id="content">
    <div id="fade" style="width:450px; text-align:center;"></div>
    
    </div>
    <!-- End Content -->
    <!-- table border -->
	

	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
		<div id="fade" style="width:450px; text-align:center;"></div>
		
		</div>
		<!-- End Content -->
		<!-- table border -->
        <br>
        <br>
        <br>
        <br>
        <form id="myform" action="OrderForm.php" method="post"
	onsubmit="return checkForm();">
<div class="shopping">
<div class="shopping_body">

        <center><font size="7"><font color="#668800">我的購物車~</font></font></a><p><p></center>
        <br>
        <br>

       
        
		<table width="100%" border="0" cellpadding="6" cellspacing="0"
	id="mytable">
	<tr>
		<td width="43%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">商品名稱</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">價
		格</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">數
		量</td>
		<td width="15%" style="border-bottom: 1px solid #d2d2d2;">
		<table width="96" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="70%" align="center" valign="middle"><!--  <input name="Submit" type="submit" class="shopping_bt" style="cursor: pointer;" value="刪 除" />--></td>
				<td width="30%" align="center" valign="middle"></td>
			</tr>
		</table>
		</td>
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
			name="item<?php echo $Myitem->_sn;?>"
			value="<?php echo $Myitem->_sn;?>"></input> <?php echo $Myitem->_name; ?></td>
		<td <?php echo $background;?>><?php echo $Myitem->_price; ?>元</td>
		<td <?php echo $background;?>><select
			name="Quity<?php echo $Myitem->_sn;?>" class="shopping_down"
			onchange="amount();">
            <option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
	
		</select></td>
		<td <?php echo $background;?>>
		<table width="96" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="70%" align="center" valign="middle"><!-- <input
					name="button<?php echo $Myitem->_sn; ?>" type="button"
					class="shopping_bt" style="cursor: pointer;"
					onclick="del(<?php echo $Myitem->_sn; ?>);" value="刪 除" />--></td>
				<td width="30%" align="center" valign="middle"></td>
			</tr>
		</table>
		</td>
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

</div>
</div>
<table  border="0" cellpadding="5" cellspacing="0"
	style="margin-top: 10px;">
	<tr>
		<td colspan="2" align="right">總金額：<span class="shopping_w2"
			id="amount">0</span>元</td>
	</tr>

</table>
<script type="text/javascript">amount();</script>

<table  border="0" cellpadding="0" cellspacing="0"
	style="margin-top: 10px;">
	<tr>
        <td align="right"><a href="shop.php"><input name="back" type="button"
			 style="cursor: pointer;" value="繼續購物" /></a>&nbsp;&nbsp;</td>
		<td align="right"><input name="Submit2" type="submit"
			class="shopping_bt1" style="cursor: pointer;" value="訂單確認" /></td>
	</tr>
</table>
</form>
					

		<!-- Text Cols -->

	
	
</body>
</html>