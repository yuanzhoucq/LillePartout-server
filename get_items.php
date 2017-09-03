<?php
require('./sql.php');

$sql = "SELECT * FROM `sellitems` WHERE `sold`='0'";
$res = mysqli_query($link, $sql)->fetch_all(MYSQLI_ASSOC);
$res = array_reverse($res);
echo json_encode($res);
