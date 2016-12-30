<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  
  
	require 'config.php';
    $result = false;
    $C= $_GET['C'];

  
  
  $update = $link->query("DELETE FROM cart WHERE c_id = '$C'");
   ( $update == true ? $result['status'] = true : $result['status'] = false );

  if ($result['status'] == true)
        {
        	echo '<script>alert("刪除成功"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=cart.php>';
        }
        else
        {
        	echo '<script>alert("刪除失敗"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=cart.php>';
        }


	
?>