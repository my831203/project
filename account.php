<!DOCTYPE html>
<html>
<head>
  <title>TLH</title>
  <meta charset="utf-8">
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="index.php">會員專區</a></h1>	
		
		<!-- Cart -->
		<div id="cart">
			<a href="buy.php" class="cart-link">前往購物</a>
			<div class="cl">&nbsp;</div>
			
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="index.php">首頁</a></li>
			    <li><a href="product.php">產品介紹</a></li>
			    <li><a href="accounting.php" class="active">會員專區</a></li>
			    <li><a href="board.php">留言板</a></li>
			    <li><a href="contact.php">連絡資訊</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
		<div align=center> <br></br><font face=Arial Unicode MS size=6> 
				
<body>
<form name="form" method="post" action="connect.php">
<p align=center>
帳號：<input type="text" name="id" /> <br>
<p align=center>
密碼：<input type="password" name="pw" /> <br>
<p align=center>
<br>
<br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<p align=center>
<br>
<br>
<a href="register.php">會員註冊</a>
</form>


	
</body>
</html>