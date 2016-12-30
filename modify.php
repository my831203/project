<?php
<?php session_start(); ?>
require("db.php");

/* 更新資料 */
$id = $_POST['id'];
$pw = $_POST['pw'];
$name_1 = $_POST['name_1'];
$birth = $_POST['birth'];
$old = $_POST['old'];
$sex = $_POST['sex'];
$name_2 = $_POST['name_2'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


$sql="UPDATE user SET id='$id', pw='$pw',name_1='name_1',birth='birth',old='old',sex='sex',name_2='name_2',phone='$phone', email='$email',address='$address' where id='$id'";
mysql_query($sql);
header("location:edit.php");

?>
