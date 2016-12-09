<!DOCTYPE html>
<html>
<head>
  <title>TLH 註冊</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>


<body>
<!-- <表頭> -->
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

<!-- <內容-左右邊> -->
<div class="ui two column middle aligned very relaxed stackable grid">

    <!-- <內容-左邊> -->
    <div class="ui centered medium image">
        <div class=""><img class="ui image" src="img/index.png"> </div>
        <h1 class="ui header"> </h1>
        <h1 class="ui header"> </h1>
    </div>

<!-- <註冊> -->
<div class="center aligned column" >
    <div class="ui aligned center aligned grid">
        <div class="ui segment">
            <form class="ui large form" name="form" method="post" action="register_finish.php">
              <div class="ui stacked segment">
                <h2 class="ui header">註冊</h2>
                <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="id" required size=40 placeholder="帳號"/>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="pw" required size=40 placeholder="密碼"/> <br>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="warning icon"></i>
                    <input type="password" name="pw2" required size=40 placeholder="請再次輸入密碼"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="child icon"></i>
                    <input type="text" name="name_1" required size=40 placeholder="孩童姓名"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="calendar icon"></i>
                    <input type="date" name="birth" required size=40 placeholder="生日"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="empty heart icon"></i>
                    <input type="text" name="old" required size=40 placeholder="年齡"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="heterosexual icon"></i>
                    <input type="radio" name="sex" value="0" required size=40 placeholder="性別"/>
					<input type="radio" name="sex" value="1" required size=40 placeholder="性別"/>					<br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="name_2" required size=40 placeholder="監護人姓名"/> <br>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="phone icon"></i>
                    <input type="text" name="phone" required size=40 placeholder="電話"/> <br>
                </div>
                </div>
                <div class="field">
                <div class="ui left icon input">
                    <i class="mail icon"></i>
                    <input type="email" name="email" required size=40 placeholder="電子信箱"/> <br>
                </div>
                </div>
				<div class="field">
                <div class="ui left icon input">
                    <i class="home icon"></i>
                    <input type="text" name="address" required size=40 placeholder="地址"/> <br>
                </div>
                </div>
                <input class="ui teal button" type="submit" name="submit" value="遞送" style="width:80px"/>&nbsp;&nbsp;
                <input class="ui teal button" type="reset" name="reset" value="清除" style="width:80px"/>&nbsp;&nbsp;
            </div>
          </form>
      </div>
    </div>
</div>



</body>
</html>
