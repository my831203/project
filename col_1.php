<?php session_start(); ?>
<html>
<head>
    <title>童玩介紹:劍玉</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">
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

<div align="center" ><br>
<div class="ui grid">
        <div class="two wide column"></div>
          <div class="twelve wide column">

<h2 class="ui horizontal divider header"><i class="Trophy icon"></i> 劍玉</h2>

<br><br>

<img src="img/col_.11.jpeg" class="ui big inline image"><br><br>
<img src="img/col_.12.jpeg" class="ui large  inline image">
<img src="img/col_.13.jpeg" class="ui large inline image"><br>
<img src="img/col_.14.jpeg" class="ui large  inline image">
<img src="img/col_.15.jpeg" class="ui large inline image"><br><br>
<br>
</div>
        <div class="two wide column"></div>
    </div>

      <button class="ui Huge inverted brown button" onclick="location.href='index.php'">回首頁</button>
      </div><br><br><br>


</body>
</html>