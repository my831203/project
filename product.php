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
    <i class="home icon"></i>首頁
</a>
<a class="item" href="learn.php" style="color:#FFFFFF;">
    <i class="book icon"></i>教學
</a>
<a class="item" href="test.php" style="color:#FFFFFF;">
    <i class="write icon"></i>測驗
</a>
<a class="item" href="shop.php" style="color:#FFFFFF;">
    <i class="shop icon"></i>商城
</a>
<?php
    if (isset($_SESSION['id'])) {

        echo '
            <a class="item" href="logout.php" style="color:#FFFFFF;">
                <i class="user icon"></i>登出 '.$_SESSION['id'].'
            </a>
        ';
    }
    else{

        echo '
            <a class="item" href="log.php" style="color:#FFFFFF;">
                <i class="user icon"></i>登入
            </a>
        ';
    }
?>
      

<?php
            require 'config.php';
            // 找出該使用者 member 表資料

            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();
              }
        ?>
<a href="cart.php">
                        <?php
                        $sss = $link->query("SELECT * FROM cart where p_username='$id'");
                         $rows = $sss->fetch_assoc();
                        $num = mysql_fetch_row($rows);
                        // count products in cart
                        
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo '$num'; ?></span>
                    </a>
</div>



<div align="center" >

<div class="ui special cards" >

<?php  

    $A      = $_GET['A'];
    $result = $link->query("SELECT * FROM product WHERE id_P = '$A'");
    
    while($row = $result->fetch_assoc()) {

      $item_id = $row['id_P'];
?>




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
        <button type="button" id="buy" class="ui button" item="<?=$row['id_P']?>" onclick="location.href='product.php?A=<?=$row['id_P'];?>'">加入購物車</button>
    </div>
  </div>
 
</div>
</div>
</div>


  <script>
    $("#buy").click(function(){

        $.ajax({
            type:'post',
            url:'addItem.php',
            dataType:'json',
            data: {
                pro : $(this).attr('item'),
                amount : $("#amount").val(),
            },

            error: function (xhr) {
                alert('加入購物車成功');
            },
            success: function (response) {
              var response = $.parseJSON(JSON.stringify(response));
                            if (response.status == true) {
                                alert('加入購物車成功');
                            }
                            else{
                                alert('加入購物車失敗');
                            }
            }
        });
    });
</script>
<?php
        }
        ?>


</body>
</html>