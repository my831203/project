<?php session_start(); ?>
<?php

	require 'config.php';

	$id = $_POST['id'];
	$pw = $_POST['pw'];

	$query = $link->query("SELECT * FROM member where id = '$id' AND pw = '$pw'");

	if ($query->num_rows == 1) {

		$row = $query->fetch_assoc();

		$_SESSION['id'] = $id;
		$_SESSION['num'] = $row['id_num'];
		echo '<script>alert("登入成功"); </script>';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
	}
	else{

		echo '<script>alert("登入失敗"); </script>';
		echo '<meta http-equiv=REFRESH CONTENT=0;url=log.php>';
	}
