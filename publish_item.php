<?php
require('./sql.php');

$name = $_GET['name'];
$price = $_GET['price'];
$openid = $_GET['userId'];
$des = $_GET['des'];

$sql = "INSERT INTO `sellitems`( `userId`, `name`, `price`, `description`) VALUES ($openid, $name, $price, $des);";
$res = mysqli_query($link, $sql);
echo mysqli_errno($link);
mysqli_close($link);
if($res) {
    echo 'ok';
}