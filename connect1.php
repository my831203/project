<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	require 'config.php';

	$teacher_id = $_POST['teacher_id'];
	$t_pw = $_POST['t_pw'];

	$query = $link->query("SELECT * FROM teacher where teacher_id = '$teacher_id' AND t_pw = '$t_pw'");

	if ($query->num_rows == 1) {

		$row = $query->fetch_assoc();

		$_SESSION['teacher_id'] = $teacher_id;
		//$_SESSION['t_num'] = $t_num';
		echo '<script>alert("登入成功"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=check.php>';
	}
	else{

		echo '<script>alert("登入失敗"); </script>';
		echo '<meta http-equiv=REFRESH CONTENT=0;url=teacher.php>';
	}
