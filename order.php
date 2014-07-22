<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/style_insight_bio.css" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> 谢谢订购！ </title>
<head>
<body>

<?php
  $dbc = mysqli_connect('localhost', 'root', '', 'orderdata')
    or die('Error connecting to MySQL server.');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $institution = $_POST['institution'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $postcode = $_POST['postcode'];
  $product = $_POST['product'];
  $msg = $_POST['msg'];
  $current_time = getdate(time());

  $query = "INSERT INTO orders (name, email, phone, institution, address, product, msg)  VALUES ('$name', '$email', '$phone',
  '$institution', '$address', '$product', '$msg')";

mysqli_query($dbc, $query)
    or die('Error querying database.');
$query = "SELECT * FROM orders WHERE name='$name'";
$result=mysqli_query($dbc,$query)
  or die('Error querying database.');


$row = mysqli_fetch_array($result);
$order_id = $row['order_id'];


$confirmation_msg = "$name 您好,\n\n您订购了：\n$product 。\n订单号是：$order_id 。我们会在24小时内回复您。\n\n\n谢谢！\n\n广州英思特";
$subject = "Order confirmation from Guangzhou Insight Biotech";
$from = "Guangzhou Insight Biotech";
mail($email, $subject, $confirmation_msg, 'From:' . $from);
$notification_msg = "客户订单如下： \n\n$product。 \n\n订单号是： $order_id。 \n\n 订购时间是：$current_time";
mail('gengyuli@icloud.com', 'orders incoming!', $notification_msg, 'From:' . $from);

  echo '谢谢，'.$name. '。'; 
  echo '您的订单号是： '.$order_id;
  echo "<br>";
  echo '订单信息已经发送到: '.$email.', 我们会在24小时内回复您。';


  mysqli_close($dbc);


?>

</body>
</html>
