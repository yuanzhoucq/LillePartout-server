<?php
require('./sql.php');
$id = $_GET['id'];

$sql = "SELECT `sold` FROM `sellitems` WHERE `id`='$id'";
$res = mysqli_query($link, $sql)->fetch_assoc();

if($res['sold']=='0') {
    $newState = '1';
}
else {
    $newState = '0';
}

$sql = "UPDATE `sellitems` SET `sold` = '$newState' WHERE `sellitems`.`id` = '$id';";
$res = mysqli_query($link, $sql);

if($res) {
    echo 'ok';
}