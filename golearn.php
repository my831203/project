<!--教學-->
<?php session_start(); ?>
<html>
<head>
<?php 
    $B  = $_GET['B'];
    ?>
    <title>TLH 第<?=$_GET['B'];?>單元 教學</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body style="background-image:url(img/bbb.jpg);">
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
<h1 class="ui header" style="background-image:url(img/bbb.jpg);"> </h1>
        <h1 class="ui header" style="background-image:url(img/bbb.jpg);"> </h1>
          
      <div class="ui grid">
        <div class="three wide column"  style="background-image:url(img/bbb.jpg);"></div>
          <div class="ten wide column" style="background-color: #FFFFFF;">
                <?php 
                    $sql =$link->query(" SELECT * FROM learn where lesson = '$B' ");
                    
                    while($row = $sql->fetch_assoc()) 
                    {       ?>

                 <h2 class="ui header">
                  <img src="img/rose.png" class="ui Tiny circular inline image"  > 
                  <div class="content">第<?=$row['lesson'];?>單元：&nbsp;&nbsp;<?=$row['L_name'];?> 
                  <div class="sub header"><?=$row['point'];?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <img src="img/back.png" class="ui mini  circular inline image" onclick="location.href='scen.php'"">
                 </div>
                  </div>
                  </h2>
                

                  <div class="description"><h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;花萼的功能:&nbsp;&nbsp;保護花瓣。 <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;花瓣的功能:&nbsp;&nbsp;吸引昆蟲。 <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;雄蕊、雌蕊的功能:&nbsp;&nbsp;繁衍後代。 <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;凡是具有上面四個構造的花，稱為"完全花"; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果缺少其中一個部份，即稱為"不完全花"。 <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;缺少雄蕊或雌蕊的花，又稱為"單性花" 如木瓜-絲瓜。
                        </h3>
                   </div>
                <?php  } ?>
            </div>
        <div class="three wide column"  style="background-image:url(img/bbb.jpg);"></div>
    </div>

    <h1 class="ui header" style="background-image:url(img/bbb.jpg);"> </h1>


                
                <div align="center" style="background-image:url(img/bbb.jpg);">   
                <iframe width="560" height="315" src="https://www.youtube.com/embed/eGIVb-f483U" frameborder="0" allowfullscreen></iframe>
                <br>
                <br>
                
                 </div><br>
                <br><br>
                <br>



</body>
</html>