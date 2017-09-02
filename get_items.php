<?php
$sql = "SELECT * FROM `sellitems`";
$res = mysqli_query($link, $sql)->fetch_all(MYSQLI_ASSOC);
echo json_encode($res);
