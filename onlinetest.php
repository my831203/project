<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
<script type="text/javascript" language="javascript">

$(function(){
         $("#btn").click(function(){        
            var $1= $("input:radio[name='1']:checked").val();
            if($1==null){
                alert("NO.1 未做!");
                return false;
            }
            else{
                
            } 
            var $2= $("input:radio[name='2']:checked").val();
            if($2==null){
                alert("NO.2 未做!");
                return false;
            }
            else{
                
            }
            var $3= $("input:radio[name='3']:checked").val();
            if($3==null){
                alert("NO.3 未做!");
                return false;
            }
            else{
                
            }
            var $4= $("input:radio[name='4']:checked").val();
            if($4==null){
                alert("NO.4 未做!");
                return false;
            }
            else{
                
            }
           var $5= $("input:radio[name='5']:checked").val();
            if($5==null){
                alert("NO.5 未做!");
               return false;
            }
            else{
                
            }
                     
         });
     });
</script>
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

                       if (isset($_SESSION['id'])) {

                              echo '
                                  <a class="item" href="logout.php" style="color:#FFFFFF;">
                                      <i class="user icon"></i>登出 '.$_SESSION['id'].'
                                  </a>
                              ';
                          }
                          else{

                              echo  '<script>alert("您無權限觀看此頁面請先登入!"); </script>';
                              echo '<meta http-equiv=REFRESH CONTENT=0;url=log.php>';

                              
                          }
                      ?>
    </div>
    <Form Name="FormPost" Method="post" Action="correct.php" onsubmit="return ch();">
<?php

mysql_connect("localhost","root","12345678");
mysql_select_db("play");

$result=mysql_query("select * from question order by Q_id ");

for ($i=1;$i<=100;$i++)
  $question[$i]=0;
  
while($row=mysql_fetch_array($result))
{
    $question[$row[0]]=$row[0];
}

$count=1;
for ($i=1;$i<=100;$i++)
  if($question[$i]==0)
     {
       $no_question[$count]=$i;
       $count++;
     } 
$count--;



$Q_id=1;
$lotto[$Q_id]=rand(1,100);
while ($Q_id<=5)
{
  $flag=0;
  $temp=rand(1,100);

  for ($i=1;$i<=$count;$i++)
   { 
    if ($temp == $no_question[$i])  
       $flag=1;
   }    


   for ($i=1;$i<=$Q_id;$i++)
   { 
    if ($temp == $lotto[$i])
       $flag=1;
   }    
  if ($flag==0)
    {
      $Q_id=$Q_id+1;
      $lotto[$Q_id]=$temp;  
    }
}
sort($lotto);
$result=mysql_query("select * from question order by Q_id ");
   
$k=1;
$q=1;
?>

<?php
echo "<div align=\"center\" ><table class=\"ui striped table\"><tr><td><h3>NO</h3></td><td><h3>Question</h3></td></tr>";
while($row=mysql_fetch_array($result))
{
   for ($i=0; $i<5; $i++)
   { 

    if ($row[0] == $lotto[$i])
     {
       @setcookie("ans$q",$row[6]);    
       echo "<tr> <td> NO.".$q;
       $q=$q+1;
       echo "<td><input type='hidden' name='Q_id$k' value= '".nl2br($row[0])." '";
      // echo "<td><input type='text' name='A$k' value= 'NO.".nl2br($row[0])." '";
       echo "<td><font color=#6600FF size=4>".nl2br($row[1])."<br><font>";
       echo "<td><input type='radio' value='A' name='$k' >".nl2br($row[2]).  "<br>";
       echo "<td><input type='radio' value='B' name='$k' >".nl2br($row[3]).  "<br>";
       echo "<td><input type='radio' value='C' name='$k' >".nl2br($row[4]).  "<br>";
       echo "<td><input type='radio' value='D' name='$k' >".nl2br($row[5]).  "<br>";   

          
       $k=$k+1;
       echo "<tr>";
     }  
   } 
   echo "</div>"; 
}
mysql_free_result($result);
?>
<div class="ui buttons">
  <input class="ui positive button active" type="Submit" Value="提交" id="btn" >提交</input>
  <div class="or" data-text="or"></div>
  <input class="ui  button " type="reset" name="reset" value="清除">清除</input>
</div>
<!--<Input class="ui teal button" type="Submit" Value="提交"/>
<input class="ui teal button" type="reset" name="reset" value="清除" />
-->
</form>
</body>
</html>