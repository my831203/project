<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
<link href="acc.css" rel="stylesheet">
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>



</head>

<body>

<p></p>



<div class="ui left demo vertical inverted sidebar labeled icon menu" >

<div class="navbar-collapse collapse">
    <div class="ui labeled icon menu">
      <a class="" href="index.php"> <img class="ui small image" src="img/TLH.png"></a>
      <div class="nav-collapse collapse">
      <ul class="nav">
      <a class="item" href="index.php">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php">
        <i class="book icon"></i>

        教學
      </a>
      <a class="item" href="test.php">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php">
        <i class="shop icon"></i>
        商城
      </a>
      </ul>
      </div>
    </div>




      <?php 
                    include("db.php");

                          if($_SESSION['id'] != null)
                          {
                            echo "<div class=\"right menu\">";
                            echo "<a class=\"ui item\" href ="."logout.php"." >";
                            echo"Hello&nbsp;&nbsp;&nbsp;".$_SESSION['id']."<br><br>";
                            echo"登出";
                            echo "</a></div>";                            
                          }
                          else
                          {

                            echo "<div class=\"right menu\">";
                            echo "<a class=\"ui item\" href="."log.php"." >";
                            echo "<i class=\"Sign In icon\"></i>";
                            echo"登入";
                            echo "</a></div>";
                          }
      ?>                     
      
</div>
  </div>



  


    <div class="row">
        <div class="col-lg-6">
           <h1>首頁</h1>
        </div>
        <div class="col-lg-6">
           <h1>123</h1>
        </div>

    <img class="ui tiny circular image" src="img/seeds.png">
    <input type="image" class="ui tiny circular image" src="img/seeds.png" onClick="document.formname.submit();">
    </div>





</body>
</html>
