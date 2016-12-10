<?php session_start(); ?>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Semantic-UI-CSS-master/semantic.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body>
    <div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
        <?php
            require 'config.php';
            require 'menu.php';
            // 找出該使用者 member 表資料

            if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

                // $link就是我當初在弄config檔時給的變數， query就是請求資料，其他都長一樣
                $query = $link->query("SELECT * FROM member where id = '$id'");

                // $query是上面我設定的變數，->就是物件導向不用管他名稱，fetch_assoc() 這方法等同於mysql_query() 就改成這樣而已
                $row = $query->fetch_assoc();
        ?>
    </div>

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
  // echo "<b>選擇題目:</b><br/>";  // 顯示查詢結果
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
};
</script>
<input type='submit' value='確認送出' name='submin' onclick='find_value()'>
</form>

<?php
        }
    ?>
</body>
</html>
