<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  
  
	require 'config.php';
    $result = false;
    $Q_id= $_GET['Q_id'];

  
  
  $update = $link->query("DELETE FROM question WHERE Q_id = '$Q_id'");
   ( $update == true ? $result['status'] = true : $result['status'] = false );

  if ($result['status'] == true)
        {
        	echo '<script>alert("刪除成功"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=check.php>';
        }
        else
        {
        	echo '<script>alert("刪除失敗"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=check.php>';
        }


	
?>