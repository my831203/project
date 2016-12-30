<!DOCTYPE html>
<html>
<head>
  <title>TLH 註冊</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
  <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>


<body style="background-image:url(img/pink.jpg);">
<!-- <表頭> -->
  <div class="ui large menu" style="background-image:url(img/under.png);">
    <a href="about.php"> <img class="ui small image" src="img/TLH.png" ></a>
    <div class="right menu">
      <div class="item">
      <a href="register.php"><div class="ui inverted basic button">註冊</div></a>
      </div>
    <div class="item">
      <a href="log.php"><div class="ui inverted basic button">登入</div></a>
    </div>
    </div>
  </div>

<h1 class="ui header" style="background-image:url(img/pink.jpg);"> </h1>
<h1 class="ui header" style="background-image:url(img/pink.jpg);"> </h1>

<!-- <內容-左右邊> -->
<div class="ui two column middle aligned very relaxed stackable grid" style="background-image:url(img/pink.jpg);">

    <!-- <內容-左邊> -->
    
      
    
    <div class="center aligned column" >
    <div align="center">
    <div class="ui center aligned fluid image">
        <img src="img/zoo.jpeg" > </div>
        <h1 class="ui header"> </h1>
        <h1 class="ui header"> </h1> 
    </div>
    </div>

<!-- <註冊> -->
<div class="center aligned column" >
    <div class="ui aligned center aligned grid" style="background-image:url(img/pink.jpg);">
        <div class="ui segment" style="background-color:    #613030;">
            <form class="ui large form" name="form" method="post" action="register_finish.php" style="background-image:url(img/pink.jpg);">
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
				<!--<div class="field">
                <div class="ui left icon input">
                    <i class="empty heart icon"></i>
                    <input type="text" name="old" required size=40 placeholder="年齡"/> <br>
                </div>
                </div>-->
               <div class="field">
               <select class="ui search dropdown" name="old">
               <option value="5">5歲</option>
               <option value="6">6歲</option>
               <option value="7">7歲</option>
               <option value="8">8歲</option>
               <option value="9">9歲</option>
               <option value="10">10歲</option>
               <option value="11">11歲</option>
               <option value="12">12歲</option>
               </select>              
               </div>

               <div class="field">
               <select class="ui search dropdown" name="sex" >
               <option value="boy">男生</option>
               <option value="girl">女生</option>
               </select>
               </div>

				<!--<div class="field">
                <div class="ui left icon input">
          
                    <input type="radio" name="sex" value="boy" id="boy" required size=40 placeholder="性別"><label>男生</label>
					<input type="radio" name="sex" value="girl" id="girl" required size=40 placeholder="性別"><label>女生</label><br>
                </div>
                </div>-->
				      <div class="field">
               <select class="ui search dropdown" name="name_2" >
               <option value="nu">我是訪客</option>
               <option value="wenlly">wenlly</option>
               <option value="123">123</option>
               <option value="456">456</option>
               </select>
               </div>
                
                
                <input class="ui brown button" type="submit" name="submit" value="遞送" style="width:80px"/>&nbsp;&nbsp;
                <input class="ui brown button" type="reset" name="reset" value="清除" style="width:80px"/>&nbsp;&nbsp;
            </div>
          </form>
      </div>
    </div>
</div>



</body>
</html>
