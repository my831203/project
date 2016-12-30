<?php
	require 'config.php';

	$question 	= $_POST['question']; // 題號 (資料庫內的Q_id)
	$ans 		= $_POST['ans']; //使用者選的答案

	// 將1, 2, 3, 4 轉換成 A, B, C, D
	switch ($ans) {
		case '1':
			$ans = "A";
			break;
		case '2':
			$ans = "B";
			break;
		case '3':
			$ans = "C";
			break;
		case '4':
			$ans = "D";
			break;
	}

	$response['status'] = true;
	$response['isAnswer'] = $link->query("SELECT Q_id FROM question WHERE Q_id = '$question' AND ans = '$ans'")->num_rows;
	$response['trueAns'] = $link->query("SELECT ans FROM question WHERE Q_id = '$question'")->fetch_assoc();

	echo json_encode($response);



