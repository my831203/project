<!--購物車內容-->
<?php session_start(); ?>
<html>
<head>
    <title>TLH 我的購物車</title>
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
<form class="ui unstackable table" name="form" method="post" action="order.php">
<div class="ui stacked segment"><h2 class="ui header">購物車內容</h2>
   <table >
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
      <td class="right aligned collapsing"><button type="button" id="del" class="ui button"  onclick="location.href='delItem.php?C=<?=$row['c_id']?>'">刪除此商品</button></td>
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


  </tbody>

</table>
</div>
<div align="center">
<button type="button" class="ui teal button" onclick="location.href='shop.php'">繼續選購</button>
<input type="submit" class="ui teal button" name="button" value="確定購買" /> 
</div>


</div>
</div>
</div>

</form>

 

</body>
</html>