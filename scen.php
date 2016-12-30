<?php session_start(); ?>
<html>
<head>
    <title>TLH自然教學</title>
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
            // 找出該使用者 member 表資料

            if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();

            }
        ?>
    </div>
<br>

<h4 class="ui horizontal divider header"><i class="tag icon"></i> 自然 </h4><br>
<div class="ui grid">
        <div class="two wide column"></div>
          <div class="four wide column"><img class="ui centered medium image" src="img/scen.jpeg" onclick="location.href='scen.php'"></div>
          <div class="ten wide column">
<?php
    $result = $link->query("SELECT * FROM learn");

    while($row = $result->fetch_assoc())
    {


?>

                    <div class="center">
                    <div class="ui cards" >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="card">
                    <div class="content">
                      <div class="header">第<?=$row['lesson'];?>單元：&nbsp;&nbsp;<?=$row['L_name'];?></div>
                      <div class="description"><?=$row['point'];?> </div>
                    </div>
                    <div class="ui bottom attached button" onclick="location.href='golearn.php?B=<?=$row['lesson'];?>'"><i class="add icon" ></i> 進入學習 </div>
                  </div><br>
                </div>

                </div><br>
<?php

        }
    ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="ui secondary button" onclick="location.href='learn.php'">回作業簿選單</button>
</div>
</body>
</html>
