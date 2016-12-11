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

        <div class="ui small images">
            <img class="ui tiny circular image func" types="seeds" value="1000" src="img/seeds.png">
            <img class="ui tiny circular image func" types="water" value="3000" src="img/water.png">
            <img class="ui tiny circular image func" types="famer" value="5000" src="img/farmer.png">
        </div>

        <script>

            $(".func").click(function(){
                if ($(this).attr('types') == "seeds") {

                    $.ajax({
                        type:'post',
                        url:'del_coin.php',
                        dataType:'json',
                        data: {
                            value : $(this).attr('value'),
                        },
                        error: function (xhr) {
                            alert('failed');
                        },
                        success: function (response) {

                            var response = $.parseJSON(JSON.stringify(response));
                            if (response.status == true) {
                                alert('施肥成功，將會扣金幣1000');
                            }
                            else{
                                alert('趕快去練習賺點錢吧~');
                            }
                        }
                    });
                }
                else if ($(this).attr('types') == "water") {
                    $.ajax({
                        type:'post',
                        url:'del_coin.php',
                        dataType:'json',
                        data: {
                            value : $(this).attr('value'),
                        },
                        error: function (xhr) {
                            alert('failed');
                        },
                        success: function (response) {

                            var response = $.parseJSON(JSON.stringify(response));
                            if (response.status == true) {
                                alert('澆水成功，將會扣金幣3000');
                            }
                            else{
                                alert('趕快去練習賺點錢吧~');
                            }
                        }
                    });
                    
                }
                else if ($(this).attr('types') == "famer") {
                    $.ajax({
                        type:'post',
                        url:'del_coin.php',
                        dataType:'json',
                        data: {
                            value : $(this).attr('value'),
                        },
                        error: function (xhr) {
                            alert('failed');
                        },
                        success: function (response) {

                            var response = $.parseJSON(JSON.stringify(response));
                            if (response.status == true) {
                                alert('除草成功，將會扣金幣5000');
                            }
                            else{
                                alert('趕快去練習賺點錢吧~');
                            }
                        }
                    });
                  
                }
                
            });

        </script>

        </div>
    <?php
        }
    ?>

</body>
</html>
