<!DOCTYPE html>
<html>
<head>
  <title>老師登入</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<!-- <表頭> -->
<body>
   <div class="ui large menu" style="background-image:url(img/under.png);">
  <a href="about.php"> <img class="ui small image" src="img/TLH.png"></a>

</div>

<h1 class="ui header"> </h1>
<h1 class="ui header"> </h1>

<!-- <內容-登入> -->
  <div class="center aligned column">
        <div class="ui aligned center aligned grid">
            <div class="ui segment">
                <form class="ui large form" name="form" method="post" action="connect1.php">
                <div class="ui two item menu">
                  <a class="item" href="log.php">學生登入 </a>
                  <a class="active item" >老師登入 </a>
                </div>
                <div class="ui stacked segment">
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="teacher_id" placeholder="帳號"/>
                    </div>
                    </div>
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="t_pw" placeholder="密碼"/> <br>
                    </div>
                    </div>
                    <div align="center">
					         <input class="ui teal button" type="submit" name="button" value="登入" style="width:80px"/>
                   </div>
                  </div> 
                </form>
                  <div class="ui message"> <a href="log.php">返回學生畫面</a>
                  </div>
                  
              </div>
          </div>
      </div>


</body>
</html>
