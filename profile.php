<?php


$access_token = 'YA/poc0Jd62ZyrKs2fsZSLVhVb8MWIyflVKuahqFh1Jo4tqFf0X7bCQ/r5r3D4SGQ5gWJBYUrKUUyBw/hhh3iZ2+y8Rt08/MHKbWTAlAiP5ld2MCW9ctjUs9mUWkM3Fkj1wnhhrHS+K3ChcJqz24MgdB04t89/1O/w1cDnyilFU=';

$userId = 'Ud2f9a8bbdd6e167dff9923cf2e718a73';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

