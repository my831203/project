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
            // 找出該使用者 member 表資料

            if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();
        ?>
    </div>

    
    <div class="ui center aligned segment">

        <div class="ui center aligned statistic">

            <div class="label">
                <img src="img/bank.png" class="ui mini circular inline image"> <?=$row['coin']?>
            </div>

            <?php
                if ($row['touch'] <= 5) {
                  echo '<img src="img/1.png">';
                }
                else if ($row['touch'] <= 10) {
                  echo '<img src="img/2.png">';
                }
                else{
                  echo '<img src="img/3.png">';
                }
            ?>

        </div>

        <div class="ui three bottom attached buttons">
            <!-- 這裡我建議改成ajax比較方便 -->
                <form class="ui large form" >
                <input type="image" class="ui tiny circular image" name="seeds" id="seeds" value="1000" src="img/seeds.png"  style="background-color:#f4f4f4;">
                </form>

                <form class="ui large form">
                <input type="image" class="ui tiny circular image" name="water" id="water" value="3000" src="img/water.png"  style="background-color:#f4f4f4;">
                </form>

                <form class="ui large form">           
                <input type="image" class="ui tiny circular image" name="farmer" id="farmer" value="5000" src="img/farmer.png" style="background-color:#f4f4f4;">
                </form>

        <script>
            $("ui tiny circular image").click(function(){

                $.ajax({
                    type:'post',
                    url:'del_coin.php',
                    dataType:'json',
                    data: {
                        but : $(this).attr('id'),
                        value : $(this).attr('value'),
                    },

                    error: function (xhr) {
                        alert('失敗');
                    },
                    success: function (response) {
                        alert('成功');
                    }
                });
            });
        </script>

        </div>
    </div>
    <?php
        }
    ?>

</body>
</html>
