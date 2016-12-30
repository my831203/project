<!DOCTYPE html>
<html>
<head>
  <title>TLH 登入</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<!-- <表頭> -->
<body   style="background-color:   #FCFCFC;">
 <div class="ui large menu" style="background-image:url(img/under.png);">
  <a href="about.php"> <img class="ui small image" src="img/TLH.png"></a>
<div class="right menu">
  <div class="item">
      <a href="register.php"><div class="ui inverted basic button">註冊</div></a>
  </div>
  <div class="item">
      <a href="log.php"><div class="ui inverted basic button">登入</div></a>
  </div>
  </div>
</div>


        <h1 class="ui header"> </h1>
        <h1 class="ui header"> </h1> 
<!-- <內容-左右邊> -->
<div class="ui two column middle aligned very relaxed stackable grid" >

    <!-- <內容-左邊> -->
    
      
    
    <div class="center aligned column" >
    <div align="center">
    <div class="ui center aligned fluid image">
        <img src="img/reg.jpeg" > </div>

    </div>
    </div>




  <!-- <內容-登入> -->
  <div class="center aligned column">
        <div class="ui aligned center aligned grid"   >
            <div class="ui segment" style="background-color:#d0d0d0;">
                <form class="ui large form" name="form" method="post" action="connect.php">
                <div class="ui two item menu">
                  <a class="active item" >學生登入 </a>
                  <a class="item" href="teacher.php">老師登入 </a>
                </div>

                <div class="ui stacked segment">

                    <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="id" placeholder="帳號"/>
                    </div>
                    </div>
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="pw" placeholder="密碼"/> <br>
                    </div>
                    </div>
                    <div align="center">
                        <input class="ui black button" type="submit" name="button" value="登入" style="width:80px"/>
                    </div>
                  </div>
                </form>
                  <div class="ui message">New to us? <a href="register.php">會員註冊</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


</body>
</html>
