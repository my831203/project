<body bgcolor="#BBFFEE">
<p align=center>
<?php session_start(); ?>

<?php
include("db.php");

$que = $_POST['que'];
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];
$D = $_POST['D'];
$ans = $_POST['ans'];


if($que != null && $A != null && $B != null && $C != null && $D != null && $ans != null)
{
        
        
        $sql = "insert into question (que, A, B, C, D ,ans) values ('$que', '$A', '$B', '$C', '$D', '$ans')";
        if(mysql_query($sql))
        {
               echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
               

        }
        else
        {
                
                echo '很抱歉，請再試一次!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
        }
}
else
{
        
        echo '很抱歉，請再試一次!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
}

?>