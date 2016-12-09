<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
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
                        include("db.php");
                        $sqll = "SELECT * FROM cart where p_username='$id'";
                        $re = mysql_query($sqll);
                        $num = mysql_fetch_row($re);
                        // count products in cart
                        
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo $num; ?></span>
                    </a>
                

      </div>


<?php

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

<?php  

    $A      = $_GET['A'];
    $result = mysql_query("SELECT * FROM product WHERE id_P = '$A'");
    
    while($row = mysql_fetch_array($result)) {

      $item_id = $row['id_P'];
?>



<div id="main">
  <div class="cl">&nbsp;</div>
    
  <!-- Content -->
  <div id="content">
  <div id="fade" style="width:450px; text-align:center;"></div>
  </div>
    <!-- End Content -->
    <!-- table border -->
<div class="ui special cards" >
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
    <div class="ui right labeled input">
    <input type="text" placeholder="輸入數量" id="amount">
        <div class="ui basic label">個</div>
    </div>
        <button type="button" id="buy" class="ui button" item="<?=$row['id_P']?>">加入購物車</button>
    </div>
  </div>
<?php
        }
        ?> 


</div>
</div>


  <script>
    $("#buy").click(function(){

        $.ajax({
            type:'post',
            url:'addItem.php',
            dataType:'json',
            data: {
                id : $(this).attr('item'),
                amount : $("#amount").val(),
            },

            error: function (xhr) {
                alert('加入購物車失敗');
            },
            success: function (response) {
                alert('加入購物車成功');
            }
        });
    });
</script>



</body>
</html>