<?php
require('./sql.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `sellitems` WHERE `userId`='$id'";
$res = mysqli_query($link, $sql)->fetch_all(MYSQLI_ASSOC);
echo json_encode($res);
