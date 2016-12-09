<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">

    <div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
      <a class="item" href="index.php" style="color:#FFFFFF;">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php" style="color:#FFFFFF;">
        <i class="book icon"></i>
        教學
      </a>
      <a class="item" href="test.php" style="color:#FFFFFF;">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php" style="color:#FFFFFF;">
        <i class="shop icon"></i>
        商城
      </a>
    <?php 
                    include("db.php");

                          if($_SESSION['id'] != null)
                          {
                            echo"Hello&nbsp;&nbsp;&nbsp;".$_SESSION['id'];
                echo"<div class=\"head-signin\">";
                            echo"<h5><a href ="."logout.php"." align=\"right\"><i class=\"hd-dign\"></i><br>登出</a></h5>";
                echo"</div>";

                          }
                          else
                          {
                echo"<div class=\"head-signin\">";
                            echo"<h5><a href="."log.php"."><i class=\"hd-dign\"></i>登入</a></h5>";
                echo"</div>";
                          }
      ?>

      
                    <a href="cart.php">
                        <?php
                        // count products in cart
                        if(!isset($_SESSION['cart_items'])){
                            $cart_count = 0;
                        }else{
                            $cart_count=count($_SESSION['cart_items']);
                        }
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                

      </div>


<?php
      require 'db.php';

      if($_SESSION['id'] != null)
      {
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['id'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM member where id='$id'";
        mysql_query($sql);
       
      }
        else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
}?>

<div id="main">
  <div class="cl">&nbsp;</div>
  <div id="content">
    <div id="fade" style="width:450px; text-align:center;"></div>
  </div>
  <div class="ui special cards" >
<?php
            $query = "SELECT * FROM product ";
            mysql_query($query);
             $result = mysql_query($query) ;
            while($row = mysql_fetch_array($result))
            
            {
       ?>
  <!-- Content -->


    <!-- End Content -->
    <!-- table border -->

  <div class="card" >
    <div class="blurring dimmable image">
      <img src="img/<?=$row['img'];?>" height="150" width="150">
    </div>
    <div class="content">
      <a class="header">名稱：<?=$row['name'];?></a>
      <div class="meta">
        <span class="date">介紹：<?=$row['category'];?></span>
      </div>
    </div>
    <div class="extra content">
      <a><i class="users icon"></i>價格：$ <?=$row['price']; ?></a>
      <span class="right floated">剩餘數量：<?=$row['amount'];?>個</span>
    </div>
    <div class=" center aligned extra content" >

    <button type="button" class="ui button" onclick="location.href='product.php?A=<?=$row['id_P'];?>'">點我看詳情</button>
    
    </div>
  </div>

<?php
        }
        ?> 
  </div>

</div>


</body>
</html>