<?php session_start(); ?>
<html>
<head>
    <title>TLH訂單</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">
    <div class="ui large labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
        <?php
            
            require 'menu.php';
            // 找出該使用者 member 表資料              
        ?>
    </div>

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
<h1 class="ui header"> </h1>
<h1 class="ui header"> </h1>

<!-- <內容-左右邊> -->
<div class="ui two column middle aligned very relaxed stackable grid">


	<!-- <內容-左邊> -->
	<div class="center aligned column" >
		<div class="ui aligned center aligned grid">
			<div class="ui segment">
				<form class="ui unstackable table" >
				<div class="ui stacked segment"><h2 class="ui header">訂單內容</h2>
					<table >
					  	<thead>
						    <tr>
						      <th>商品</th>
						      <th>商品價格</th>
						      <th>購買數量</th>
						      <th>小計</th>
						    </tr>
					  </thead>
					  <tbody>
							<?php
							require 'config.php';
							if (isset($_SESSION['id'])) {

							                $id = $_SESSION['id'];
							              }

							    $query = $link->query("SELECT * FROM cart where p_username = '$id' ");
							    $sum=0;
							    while($row = $query->fetch_assoc())
							    {
							      $p = $row['p_price'];
							      $num = $row['p_amount'];
							      $total = $num*$p ;
							      $sum += $total ;
							      ?>

							    <tr>
							      <td class="collapsing"><?=$row['p_product'];?> </td>
							      <td><?=$row['p_price'];?>元</td>
							      <td><?=$row['p_amount'];?>個</td>
							      <td><?php echo "$total"; ?>元</td>
							    </tr>
							  <?php
							  }?>
					  </tbody>
					  <tbody>
						    <tr>
						      <th></th>
						      <th></th>
						      <th>總金額：</th>
						      <th><?php echo "$sum" ; ?>元</th>
						    </tr>

						</tbody>
					</table>
					</div>
				</form>
			</div>
		</div>
		<h1 class="ui header"> </h1>
	</div>



  <!-- <內容-右邊> -->
	<div class="center aligned column" >
		<div class="ui aligned center aligned grid">
			<div class="ui segment">
				<p></p>
        		<form class="ui large form" name="form" method="post" action="order_finish.php">
        			<div class="ui stacked segment"><h2 class="ui header"></h2>
						<div class="field">
	                		<div class="ui left icon input">
	                    		<i class="user icon"></i>
	                    	<input type="text" name="name" required size=40 placeholder="收件人姓名"/>
	                		</div>
                		</div>

                		<div class="field">
	                		<div class="ui left icon input">
	                    		<i class="user icon"></i>
	                    	<input type="text" name="add" required size=40 placeholder="寄送地址"/>
	                		</div>
                		</div>

                		<div class="field">
	                		<div class="ui left icon input">
	                    		<i class="user icon"></i>
	                    	<input type="text" name="mail" required size=40 placeholder="E-mail"/>
	                		</div>
                		</div>

                		<div class="field">
	                		<div class="ui left icon input">
	                    		<i class="user icon"></i>
	                    	<input type="text" name="phone" required size=40 placeholder="收件人電話"/>
	                		</div>
                		</div>

                		<div class="inline fields">
                			<label for="pay_way">付款方式：</label>
                		<div class="field">
	                		<div class="ui radio checkbox">
						        <input type="radio" name="pay_way" value="ATM" checked="" onclick="atm()" >
						        <label>ATM轉帳</label>
						    </div>
						    </div>
						    <div class="field">
	                		<div class="ui radio checkbox">
						        <input type="radio" name="pay_way" value="cod" checked="" onclick="deliever()">
						        <label>貨到付款</label>
						    </div>
						    </div>
					    </div>
					    <input class="ui teal button" type="submit" name="submit" value="確認訂單" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
