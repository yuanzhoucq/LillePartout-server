<?php
require('./sql.php');
echo mysqli_get_host_info($link);

$name = $_GET['name'];
$price = $_GET['price'];
$openid = $_GET['userId'];
$des = $_GET['des'];

$sql = "INSERT INTO `sellitems`( `userId`, `name`, `price`, `description`) VALUES ($openid, $name, $price, $des)";
$res = mysqli_query($link, $sql);
mysqli_close($link);
if($res) {
    echo 'ok';
}