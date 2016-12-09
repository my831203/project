<body bgcolor="#BBFFEE">
<p align=center>
<?php session_start(); ?>

<?php
        echo "<form name=\"form\" method=\"post\" action=\"deleteQ_finish.php\">";
        echo "請問要刪除哪個題目 ?<input type=\"text\" name=\"Q_id\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
?>