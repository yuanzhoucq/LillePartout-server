<?php
require('./sql.php');

$name = $_GET['name'];
$price = $_GET['price'];
$openid = $_GET['userId'];
$des = $_GET['des'];

$sql = "INSERT INTO `sellitems`( `userId`, `name`, `price`, `description`) VALUES ('$openid', '$name', '$price', '$des');";
$res = mysqli_query($link, $sql);
if($res) {
    $sql = "SELECT `id` FROM `sellitems` WHERE `userId`='$openid' AND `name`='$name' AND `price`='$price' AND `description`='$des';";
    $res = mysqli_query($link, $sql)->fetch_array();
    echo json_encode($res);
}
