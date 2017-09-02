<?php
require('./include.php');

use QCloud\Cos\Api;

$bucket = 'lillepartout';
$dst = '/';

$app_id = getenv(APPSETTING_APPID);
$secret_id = getenv(APPSETTING_SECRETID);
$secret_key = getenv(APPSETTING_SECRETKEY);


$config = array(
    'app_id' => $app_id,
    'secret_id' => $secret_id,
    'secret_key' => $secret_key,
    'region' => 'sgp',   // bucket所属地域：华北 'tj' 华东 'sh' 华南 'gz'
    'timeout' => 60
);


date_default_timezone_set('PRC');
$cosApi = new Api($config);

if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    $src = $_FILES["file"]["tmp_name"];
    $ret = $cosApi->upload($bucket, $src, $dst);
    var_dump($ret);
}
