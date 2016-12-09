
<html>
<head>
<meta charset="utf-8" />
<title>測驗</title>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","wenlly",
                       "12345678","play")
        or die("無法開啟MySQL資料庫連接!<br/>");
$sql = "SELECT * FROM question where Q_id  <=25 order by rand() limit 3"; // 指定SQL查詢字串 

//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
// 送出查詢的SQL指令
?>
<style>
.vs{
 color:red;
 font-weight:900;
}
</style>
<form method="post" action="open.php" action="add" name="t"  enctype="multipart/form-data">
 
<?php
$guest=array("0","1","2","3");

for($i = 1;$i <= 0;$i++)
 {
  if($i <= 0) 
  continue;
 }
 

if ( $result = mysqli_query($link, $sql) ) 
{ 
   echo "<b>選擇題目:</b><br/>";  // 顯示查詢結果
   while( $row = mysqli_fetch_assoc($result) )
 { 

echo "<h2 class='vs'>題庫".$i++.':</h2>';

echo "<h4>Q:&nbsp;".$row["que"]."</h4><br/>";

echo "<p>". "<input type='radio' name='quest[$i]' value='A' checked='A | B | C | D' />"." a&nbsp;A)".$row["A"]."</p>"."<BR>";

echo "<p>". "<input type='radio' name='quest[$i]' value='B' checked='A | B | C | D' />"." &nbsp;B)".$row["B"]."</p>"."<BR>";
	  
echo "<p>". "<input type='radio' name='quest[$i]' value='C' checked='A | B | C | D'/>"." &nbsp;C)".$row["C"]."</p>"."<BR>";
	  
echo "<p>". "<input type='radio' name='quest[$i]' value='D'checked='A | B | C | D'/>"." &nbsp;D)".$row["D"]."</p>"."<BR>";


	  ?>
	  

    <?php
   
   }     
   mysqli_free_result($result); // 釋放佔用記憶體
} 
mysqli_close($link);  // 關閉資料庫連接
?>

<script>
function find_value()
{
  var form_name = document.getElementById('t');
  //當只有一個選項的時候 可以得到value 也就不會等於undefined了
  if (form_name.two.value != undefined)
  {
    if (form_name.two.checked)
    {
      alert(form_name.two.value);
    }
  }
});
</script>
<input type='submit' value='確認送出' name='submin' onclick='find_value()'>
</form>
</body>
</html>






 
