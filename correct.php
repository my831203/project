<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
</head>

<body style="background-color: #f5f5f1;">

    <div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
      <a class="item" href="index.php" style="color:#FFFFFF;">
        <i class="home icon"></i>
        首頁
      </a>
      <a class="item" href="learn.php" style="color:#FFFFFF;">
        <i class="book icon"></i>
        教學
      </a>
      <a class="item" href="test.php" style="color:#FFFFFF;">
        <i class="write icon"></i>
        測驗
      </a>
      <a class="item" href="shop.php" style="color:#FFFFFF;">
        <i class="shop icon"></i>
        商城
      </a>
    <?php 
                    include("db.php");

                          if($_SESSION['id'] != null)
                          {
                            echo"<center>&nbsp;&nbsp;Hello&nbsp;&nbsp;&nbsp;".$_SESSION['id'];
                echo"<div class=\"head-signin\">";
                            //echo"<h5><a href ="."logout.php"." align=\"right\"><i class=\"hd-dign\"></i><br>登出</a></h5>";

                            echo"<button class=\"ui inverted tiny button\" onclick=\"location.href='logout.php'\"><h5>登出</h5></button>";
                echo"</div>";

                          }
                          else
                          {
                echo"<div class=\"head-signin\">";
                            echo"<h5><a href="."log.php"."><i class=\"hd-dign\"></i>登入</a></h5>";
                echo"</div>";
                          }
                      ?>
    </div>
 <br>
 <form action="addcoin.php" method="post" name="score">
<?php     
 $a[1]=@($_COOKIE["ans1"]);
 $a[2]=@($_COOKIE["ans2"]);
 $a[3]=@($_COOKIE["ans3"]);
 $a[4]=@($_COOKIE["ans4"]);
 $a[5]=@($_COOKIE["ans5"]);

 $score=0;   
 
 
  //$ans[0] = array ($_POST["No1ans1"],$_POST["No1ans2"],$_POST["No1ans3"],$_POST["No1ans4"]);
  //$ans[1] = array ($_POST["No2ans1"],$_POST["No2ans2"],$_POST["No2ans3"],$_POST["No2ans4"]);
  //$ans[2] = array ($_POST["No3ans1"],$_POST["No3ans2"],$_POST["No3ans3"],$_POST["No3ans4"]);
  //$ans[3] = array ($_POST["No4ans1"],$_POST["No4ans2"],$_POST["No4ans3"],$_POST["No4ans4"]);
  //$ans[4] = array ($_POST["No5ans1"],$_POST["No5ans2"],$_POST["No5ans3"],$_POST["No5ans4"]);
 $error[1] = $_POST["Q_id1"];
  $error[2 ]= $_POST["Q_id2"];
  $error[3] = $_POST["Q_id3"];
  $error[4] = $_POST["Q_id4"];
  $error[5] = $_POST["Q_id5"];

  $ans[0] = $_POST["1"];
  $ans[1] = $_POST["2"];
  $ans[2] = $_POST["3"];
  $ans[3] = $_POST["4"];
  $ans[4] = $_POST["5"];

      
  $b[1]=implode("",$ans);
  $b[2]=implode("",$ans);
  $b[3]=implode("",$ans);    
  $b[4]=implode("",$ans);    
  $b[5]=implode("",$ans);

 
 
 $score=0;
 //echo "<h4 class=\"ui horizontal divider header\"><i class=\"Font icon\"></i> ANSWER </h4>";
 // echo "<font color=#008000>正確答案為 : <BR>";  
 // for ($i=1;$i<6;$i++) 
 // {
  //   echo $a[$i]."   ";
  //}
  //echo "<br><br><br>";
  //echo "<font color=#FF00FF>你輸入答案為 : <BR>";

//for ($i=1;$i<=1;$i++) 
 //{
  //echo $b[$i]."      ";
//     }
 require 'config.php';
  echo "<center><br><br><br><table class=\"ui celled striped table\"><tr><td>";
 
 for ($i=1; $i<6;$i++) 
  {
     if ($_POST["$i"]==$a[$i])
	 {
       echo "<tr><td><font color=#0000FF><i class=\"checkmark icon\"></i>第".$i."題答對，".$a[$i]."<br>"; 
       $score=$score+1;

       $query = $link->query("SELECT * FROM question where Q_id = '$error[$i]'");
        $row = $query->fetch_assoc();
        echo "<tr><td><font color=black>";
          echo $row['que']."<br>";
           echo "(A.)&nbsp;".$row['A'];
          echo "&nbsp;&nbsp;&nbsp;(B.)&nbsp;".$row['B'];
           echo "&nbsp;&nbsp;&nbsp;(C.)&nbsp;".$row['C'];
          echo "&nbsp;&nbsp;&nbsp;(D.)&nbsp;".$row['D'];    
      // echo "<tr><td>".$error[$i]."<br>";
	 }
     else{
       echo "<tr><td><font color=red><i class=\"remove icon\"></i>第".$i."題答錯，正確答案為: ".$a[$i]."<BR>";  
      // echo "<tr><td>".$error[$i]."<br>";
      $query = $link->query("SELECT * FROM question where Q_id = '$error[$i]'");
        $row = $query->fetch_assoc();
        echo "<tr><td><font color=black>";
          echo $row['que']."<br>";
           echo "(A.)&nbsp;".$row['A'];
          echo "&nbsp;&nbsp;&nbsp;(B.)&nbsp;".$row['B'];
           echo "&nbsp;&nbsp;&nbsp;(C.)&nbsp;".$row['C'];
          echo "&nbsp;&nbsp;&nbsp;(D.)&nbsp;".$row['D'];
          
      $update = $link->query("UPDATE question SET err = err+ 1 WHERE Q_id = '$error[$i]'");
	 }
  }
echo "</table>";
  $tota=$score*500;
  echo "<br><br><h3>五題中你答對了".$score."題，";
  echo "獎勵:</h3><br><div class=\"ui right labeled input\">
  <div class=\"ui mini label\">$</div>";
  echo " <input type=\"text\" value=".$tota. " readonly=\"true\">";
  //echo $tota;
  echo "<div class=\"ui basic label\">元</div></div><br><br>"; 
  echo "<input type=\"hidden\" value=".$tota." name=\"tota\" ><br>"; 

   
          
?>

  
  <input class="ui action button" type="Submit" Value="領取獎勵"></input>


</form>
