<?php
require('./sql.php');

$name = $_GET['name'];
$price = $_GET['price'];
$openid = $_GET['openid'];
$des = $_GET['des'];

$sql = "INSERT INTO `sellitems`( `userId`, `name`, `price`, `description`) VALUES ($openid, $name, $price, $des)";
$res = mysqli_query($link, $sql);

if($res) {
    echo 'ok';
}