<?php session_start(); ?>
<html>
<head>
    <title>TLH商品</title>
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
        echo  '<script>alert("您無權限觀看此頁面請先登入!"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=log.php>';

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
        <a class="item" href="cart.php" style="color:#FFFFFF;">
            <i class="Shopping Basket icon"></i>購物車
        </a>
</div>

<h1 class="ui header"> </h1>
<h1 class="ui header"> </h1>

<div align="center" >

<div class="ui aligned center aligned grid">
<div class="ui segment">  

<div class="ui special cards" >

<?php  

    $A      = $_GET['A'];
    $result = $link->query("SELECT * FROM product WHERE id_P = '$A'");
    
    while($row = $result->fetch_assoc()) {

      $item_id = $row['id_P'];
?>





      <div class="card">


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
      <a><i class="Dollar icon"></i>價格：$ <?=$row['price']; ?></a>
      <!--<span class="right floated">剩餘數量：<?=$row['amount'];?>個</span>-->
    </div>
    <div class=" center aligned extra content" >
    <div class="ui right labeled input">
    <select class="ui search dropdown" id="amount">個
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
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
                <option value="17">17</option>
                 <option value="18">18</option>
                  <option value="19">19</option>
                   <option value="20">20</option>
               </select>              
    </div>
        <button type="button" id="buy" class="ui button" item="<?=$row['id_P']?>" onclick="location.href='shop.php'">加入購物車</button>
    </div>
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