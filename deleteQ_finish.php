<body bgcolor="#BBFFEE">
<p align=center>
<?php session_start(); ?>

<?php
include("db.php");
$Q_id = $_POST['Q_id'];
  
        $sql = "update question set amount = null where Q_id='Q_id'";
        if(mysql_query($sql))
        {
                echo 'OK!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
        }
        else
        {
                echo 'Again!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=check.php>';
        }

?>