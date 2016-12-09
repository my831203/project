<?php session_start(); ?>
<?php

	require 'config.php';
	date_default_timezone_set("Asia/Taipei");


	$username 	=	$_SESSION['id'];
	$id 		= 	$_POST['id'];   //這裡id是欄位p_product
	$amount 	= 	$_POST['amount'];
	$date 		= 	date("Y-m-d");

					if($amount != null)
                        {
   							
   							$sql = "SELECT p_product FROM cart WHERE p_username = ? ";
							$query = $this->db->query($sql,array($username));
							if($query->num_rows() > 0)
							{ 
					 				//处理查询结果前先判断数据是否在
   					 				//****执行成功
   								//$id = $query->row()->p_product;
   									 //如果结果只有一行，row()返回对象，row_array()返回结果数组，按需选择
   									 //如果多行就用$query()->result_array()
   								$link->query("INSERT INTO cart (p_product, p_amount, p_username, p_date) VALUES ('$id', '$amount', '$username', '$date')");
   							}
   							else
   							{
   								
   							}
						}
                    else
                        {
                        	//echo '<script>alert("請輸入數量"); </script>'
								  
                        }
                          

	
?>