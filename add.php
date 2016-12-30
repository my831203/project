<!--新增問題-->
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
$teacher_id = $_SESSION['teacher_id'];


if($que != null && $A != null && $B != null && $C != null && $D != null && $ans != null)
{
        
        
        $sql = "insert into question (que, A, B, C, D ,ans, teacher_id) values ('$que', '$A', '$B', '$C', '$D', '$ans','$teacher_id')";
        if(mysql_query($sql))
        {
			  
                echo '<script>alert("新增成功"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=check.php>';
               

        }
        else
        {
                
                echo '<script>alert("再試一次"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
        }
}
else
{
        
        echo '<script>alert("再試一次"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
}

?>