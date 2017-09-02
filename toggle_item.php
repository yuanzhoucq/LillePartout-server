<?php
require('./sql.php');
$id = $_GET['id'];
$id = '26';
$sql = "SELECT `sold` FROM `sellitems` WHERE `id`='$id'";
$res = mysqli_query($link, $sql)->fetch_assoc();

echo json_encode($res);