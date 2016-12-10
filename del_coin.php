<?php session_start(); ?>
<?php

    require 'config.php';

    $result = false;
    $id     = $_SESSION['id'];
    $value  = $_POST['value'];

    $sql    = $link->query("SELECT * FROM member where id = '$id'");

    while ($row = $sql->fetch_assoc()) {
        $coin     = $row['coin'];
        $touch    = $row['touch'];
    }

    if ($coin >= $value) {

        $update = $link->query("UPDATE member SET coin = coin - '$value', touch = touch + 1 WHERE id = '$id'");
        ( $update == true ? $result['status'] = true : $result['status'] = false );
    }
    echo json_encode($result);
