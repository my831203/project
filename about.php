<?php session_start(); ?>
<html>
<head>
    <title>關於我們</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

   
<body>
<div align="center" >
<!--<div class="ui center aligned segment"  style="background-image:url(img/zoo.jpeg);  background-size: 100% 100%;
 background-repeat: no-repeat;" >
    <p></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
<div class="ui grid" style="background-image:url(img/pink.jpg);">
    <div class="two wide column"></div>
     <div class="twelve wide column">
             <br><img src="img/zoo.jpeg" class="ui inline image"><br>
    </div>
    <div class="two wide column"></div>
</div>

<div class="ui grid" style="background-image:url(img/blue.jpeg);">
    <div class="three wide column"></div>
    <div class="ten wide column">
    <img src="img/story1.jpeg" class="ui inline image">
    </div>
    <div class="three wide column"></div>
</div>

<div class="ui grid" style="background-image:url(img/blue.jpeg);">
    <div class="three wide column"></div>
    <div class="ten wide column">
    <img src="img/story2.jpeg" class="ui inline image"><br><br><br>
    </div>
    <div class="three wide column"></div>
</div>
<div style="background-color:   #272727;" >
    

    <?php 
      if (isset($_SESSION['id'])) {?>

        <br><br><br><button class="ui inverted basic button" onclick="location.href='index.php'">回首頁</button><br><br><br>

        <?php
    }
    else{ ?>

    <br> <button class="ui inverted basic button" onclick="location.href='register.php'">註冊</button>
   <button class="ui inverted basic button" onclick="location.href='log.php'">登入</button> <br>
    <br>

      <?php  
    }
      ?></div></div>

</body>
</html>
