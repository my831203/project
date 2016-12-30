<?php session_start(); ?>
<!--將商品加入購物車-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  
  $result = false;
	require 'config.php';
	date_default_timezone_set("Asia/Taipei");

	$username 	=	$_SESSION['id'];
	$pro 		= 	$_POST['pro'];   //這裡id是欄位p_product
	$amount  	= 	$_POST['amount'];
	$date 		= 	date("Y-m-d");

  $result = $link->query("SELECT * FROM product WHERE id_P = '$pro'");
    
    while($row = $result->fetch_assoc()) {

      $p_name = $row['name'];
      $p_price= $row['price'];

	if($amount != null)
      {
   							
   		//$sql = "SELECT p_product FROM cart ";
			// $query = $this->db->query($sql,array($username));
         //		if($query->num_rows() = 0)
         //		{ 
            		//处理查询结果前先判断数据是否在
               	//****执行成功
               	//$id = $query->row()->p_product;
               			//如果结果只有一行，row()返回对象，row_array()返回结果数组，按需选择
               			 //如果多行就用$query()->result_array()
         $update=$link->query("INSERT INTO cart (p_product,p_price, p_amount, p_username, p_date) VALUES ('$p_name','$p_price', '$amount', '$username', '$date')");
         ( $update == true ? $result['status'] = true : $result['status'] = false );
      }
  
               			 		

                                   
}
echo json_encode($result);
	
?>