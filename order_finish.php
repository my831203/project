<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start(); 
//<!--上方語法為啟用session，此語法要放在網頁最前方-->
//<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

require 'config.php';

$id = $_SESSION['id'];

$name = $_POST['name'];
$add = $_POST['add'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$pay_way = $_POST['pay_way'];
$sum=0;
$result = false;

$pro = $link->query("SELECT * FROM cart where p_username = '$id'");
        while($row = $pro->fetch_assoc() ){
                $total = $row['p_amount']*$row['p_price'] ;
                $sum += $total ;
                $product =$row['p_product']."共".$row['p_amount']."個,";
                }

                         

    $update = $link->query("INSERT INTO book (product, total, name, address ,phone ,email,pay_way) VALUES ('$product','$sum', '$id', '$add', '$phone', '$mail', '$pay_way')");
    ( $update == true ? $result['status'] = true : $result['status'] = false );
   json_encode($result);
  if ($result['status'] == true)
        {
            $del = $link->query("DELETE FROM cart WHERE p_username = '$id'");
            echo '<script>alert("新增成功"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=shop.php>';
        }
        else
        {
            echo '<script>alert("新增失敗"); </script>';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=order.php>';
        }


?>
