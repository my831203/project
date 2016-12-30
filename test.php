<?php session_start(); ?>
<html>
<head>
    <title>TLH進入測驗</title>
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

<div align="center" >
<h4 class="ui horizontal divider header"><i class="Trophy icon"></i>  </h4>
<img src="img/test.png" class="ui   inline image"><br>
<br><br>
        <select class="ui search dropdown" name="tea">
               <option value="wenlly">wenlly</option>
               <option value="123">123</option>
               <option value="456">456</option>
        </select>              
        <button class="ui Huge inverted brown button" onclick="location.href='onlinetest.php'">進入測驗</button>
        </div><br><br><br>


</body>
</html>
