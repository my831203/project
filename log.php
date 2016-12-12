<!DOCTYPE html>
<html>
<head>
  <title>TLH 登入</title>
  <meta charset="utf-8">
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<!-- <表頭> -->
<body>
  <div class="ui large menu" >
  <a href="index.php"> <img class="ui small image" src="img/TLH.png"></a>
<div class="right menu">
  <div class="item">
      <a href="register.php"><div class="ui green button">註冊</div></a>
  </div>
  <div class="item">
      <a href="log.php"><div class="ui green button">登入</div></a>
  </div>
  </div>
</div>

<h1 class="ui header"> </h1>
<h1 class="ui header"> </h1>

<!-- <內容-登入> -->
  <div class="center aligned column">
        <div class="ui aligned center aligned grid">
            <div class="ui segment">
                <form class="ui large form" name="form" method="post" action="connect.php">
                <div class="ui stacked segment">
                  <h2 class="ui header">登入</h2>
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
                    <input type="submit" class="ui teal button" name="button" value="登入" />&nbsp;&nbsp;
                </form>
                  <div class="ui message">New to us? <a href="register.php">會員註冊</a>
                  </div>

              </div>
          </div>
      </div>
    </div>

</body>
</html>
