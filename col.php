<?php session_start(); ?>
<html>
<head>
    <title>童玩收集</title>
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

<div align="center" >&nbsp;&nbsp;
<div class="ui grid">
        <div class="three wide column"></div>
          <div class="ten wide column">

<h4 class="ui horizontal divider header"><i class="Trophy icon"></i> </h4>&nbsp;&nbsp;
<?php
 $query = $link->query("SELECT * FROM member where id = '$id'");
                                $row = $query->fetch_assoc();
                                        if ($row['col']<=0) { ?>
                                                    <h2>你還沒收集到東西喔，加油加油!!</h2>
                                                    <table align="center">&nbsp;&nbsp;
                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>
                                                    </table>                        
                                        <?php }

                                        else if ($row['col']<=1) { ?>
                                                    <table>&nbsp;&nbsp;
                                                    <tr>
                                                    <td> <img src="img/col_1.jpeg" class="ui inline image" onclick="location.href='col_1.php'""></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>
                                                    </table>                        
                                        <?php }

                                        else if ($row['col']<=2) { ?>
                                                    <table>
                                                    <tr>
                                                    <td> <img src="img/col_1.jpeg" class="ui inline image" onclick="location.href='col_1.php'""></td>
                                                    <td> <img src="img/col_2.jpeg" class="ui inline image" onclick="location.href='col_1.php'""></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>
                                                    </table>                        
                                        <?php }
                                        
                                        else { ?>
                                                    <table>
                                                    <tr>
                                                    <td> <img src="img/col_1.jpeg" class="ui inline image" onclick="location.href='col_1.php'""></td>
                                                    <td> <img src="img/col_2.jpeg" class="ui inline image" onclick="location.href='col_1.php'""></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>

                                                    <tr>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    <td> <img src="img/col_.jpeg" class="ui inline image"></td>
                                                    </tr>
                                                    </table>                        
                                        <?php }
?>
</div>
        <div class="three wide column"></div>
    </div>

<br><br>
      <button class="ui Huge inverted brown button" onclick="location.href='index.php'">回首頁</button>
      </div><br><br><br>


</body>
</html>
