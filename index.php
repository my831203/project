<?php session_start(); ?>
<html>
<head>
    <title>TLH童樂會</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
   
</head>

<body style="background-color: #f5f5f1;" >
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


    
    <div class="ui center aligned segment"  style="background-image:url(img/bg.jpg);" ><br>
   

    

        <div class="ui center aligned statistic"  >

             <div class="label">
             <img src="img/doc.png"  data-title="小提示" data-content="澆水需$1000<br>施肥需$3000<br>除草需$5000<br>收成需$10000<br>*完成測驗最高可獲得$2500喔" class="ui Tiny avatar image">&nbsp;&nbsp;點我看提示 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/col_.png" class="ui Mini circular inline image" onclick="location.href='col.php'">&nbsp;&nbsp;我的收集 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <img class="ui right spaced avatar image" src="img/bank.png"><a class="ui circula label"> <?=$row['coin']?> </a>
                 <br><br><br>
 

 

            <?php
                if ($row['touch'] <= 5) {
                  echo '<img class="ui centered image" src="img/1.gif">';
                }
                else if ($row['touch'] <= 10) {
                  echo '<img class="ui centered image" src="img/2.gif">';
                }
                else if ($row['touch'] <= 15) {
                   echo '<img class="ui centered image" src="img/3.gif">';
                }
				else if ($row['touch'] <= 20) {
                   echo '<img class="ui centered image" src="img/4.gif">';
                }
                else if ($row['touch'] = 20){                                 
					echo "<script>alert(\"該收成了喔!\");</script>";
					echo '<img class="ui centered image" src="img/4.gif">';
                }
				else{
					
				}
            ?>
           <!-- <img class="ui Large circular inline image" src="img/t.png">-->

        </div><br><br>
        <div class="ui Medium images">
            
            <img src="img/seeds.png" class="ui Large circular inline image"  types="seeds" value="1000" name="施肥" src="img/seeds.png" onclick="location.href='del_coin.php?C=seeds'">          
            <img src="img/water.png" class="ui Large circular inline image" types="water" value="3000" name="澆水" onclick="location.href='del_coin.php?C=water'">
            <img src="img/farmer.png" class="ui Large circular inline image"  types="farmer" value="5000" name="除草" onclick="location.href='del_coin.php?C=farmer'">
            <?php
            if ($row['touch'] >= 20) {?>
             <img src="img/col.png" class="ui Large circular inline image" onclick="location.href='bamboo.php'"">
            <?php ;}?>
            <br><br><br><br>

        </div>
                </div>
        </div>



  
<div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
<a class="item" href="user.php" style="color:#FFFFFF;">
    <i class="setting icon"></i>會員管理</a>
    <a class="item" href="about.php" style="color:#FFFFFF;">
    <i class="setting icon"></i>About Us</a>
    </div>


    


</body>
</html>
