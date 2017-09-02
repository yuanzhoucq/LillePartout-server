<?php

$app_id = getenv(APPSETTING_WX_APPID);
$secret = getenv(APPSETTING_WX_SECRETID);
$code = $_GET['code'];

$url = "https://api.weixin.qq.com/sns/jscode2session?appid=$app_id&secret=$secret&js_code=$code&grant_type=authorization_code";

$html = file_get_contents($url);
echo $html;