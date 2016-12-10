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

<body>
<div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
<?php  

    require 'config.php';
    require 'menu.php';

    if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();


        }?>  
</div>         

<?php 
    $B  = $_GET['B'];

    $sql =$link->query(" SELECT * FROM learn where lesson = '$B' ");
    
    while($row = $sql->fetch_assoc()) 
    {       
?>

<h2 class="ui header">
  <img class="ui image" ><i class="student icon"></i>
  <div class="content">第<?=$row['lesson'];?>單元</div>
  <div class="description"><?=$row['point'];?> </div>
</h2>


<?php
        }
    ?>

</body>
</html>