<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">
    <div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
        <?php
            
            require 'menu.php';
            // 找出該使用者 member 表資料              
        ?>
    </div>


<h1 class="ui header"> </h1>
<h1 class="ui header"> </h1>

<div class="ui aligned center aligned grid">
<div class="ui segment">
<form class="ui large form" name="form" method="post" action="order.php">
   <table class="ui single line table">
  <thead>
    <tr>
      <th>商品</th>
      <th>商品價格</th>
      <th>購買數量</th>
      <th>小計</th>
      <th></th>
    </tr>
  </thead>
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
      <td class="collapsing"><i class="folder icon"></i><?=$row['p_product'];?> </td>
      <td><?=$row['p_price'];?>元</td>
      <td><?=$row['p_amount'];?>個</td>
      <td><?php echo "$total"; ?>元</td>
      <td class="right aligned collapsing"><button type="button" id="del" class="ui button" item="<?=$row['c_id']?>" onclick="location.href='cart.php'">刪除此商品</button></td>
    </tr>
<?php
  }?>
  
    <tr>
      <th></th>
      <th></th>
      <th>總金額：</th>
      <th><?php echo "$sum" ; ?>元</th>
      <th></th>
    </tr>

    <tr>

    <th>
    <button type="button" class="ui teal button" onclick="location.href='shop.php'">繼續選購</button>
    <input type="submit" class="ui teal button" name="button" value="確定購買" />
    <th>
    <th></th>
    </tr>
  </tbody>

</table>
</div>
</div>

</form>

 <script>
    $("#del").click(function(){

        $.ajax({
            type:'post',
            url:'delItem.php',
            dataType:'json',
            data: {
                c_id : $(this).attr('item'),
            },

            error: function (xhr) {
                alert('刪除失敗');
            },
             success: function (response) {
              var response = $.parseJSON(JSON.stringify(response));
                            if (response.status == true) {
                                alert('刪除成功');
                            }
                            else{
                                alert('刪除失敗');
                            }
            }
        });
    });
</script>

</body>
</html>