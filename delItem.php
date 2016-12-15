<?php session_start(); ?>

<?php  
  
	require 'config.php';
    $result = false;

	$id 	=	$_POST['c_id'];
  
  
  $update = $link->query("DELETE FROM cart WHERE c_id = '$id'");
  ( $update == true ? $result['status'] = true : $result['status'] = false );

   echo json_encode($result);

	
?>