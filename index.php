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
                $query = $link->query("SELECT * FROM member where id = '$id'");
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

            <form class="ui large form" name="form1" method="post" action="seeds.php" >
                <input type="image" class="ui tiny circular image" name="seeds" id="seeds" value="1000" src="img/seeds.png" onClick="document.form1.submit()" style="background-color:#f4f4f4;">
                <input type="hidden" name="total" value="<?php echo $row[11];?>">
            </form>

            <form class="ui large form" name="form2" method="post" action="water.php">
                <input type="image" class="ui tiny circular image" name="water" id="water" value="3000" src="img/water.png" onClick="document.form2.submit()" style="background-color:#f4f4f4;">
                <input type="hidden" name="total" value="<?php echo $item_total;?>">
            </form>

            <form class="ui large form" name="form3" method="post" action="famer.php">
                <input type="image" class="ui tiny circular image" name="farmer" id="farmer" value="5000" src="img/farmer.png" onClick="document.form3.submit()" style="background-color:#f4f4f4;">
                <input type="hidden" name="total" value="<?php echo $item_total;?>">
            </form>

        </div>
    </div>
    <?php
        }
    ?>

</body>
</html>
