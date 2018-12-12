<?php



require "vendor/autoload.php";

$access_token = 'YA/poc0Jd62ZyrKs2fsZSLVhVb8MWIyflVKuahqFh1Jo4tqFf0X7bCQ/r5r3D4SGQ5gWJBYUrKUUyBw/hhh3iZ2+y8Rt08/MHKbWTAlAiP5ld2MCW9ctjUs9mUWkM3Fkj1wnhhrHS+K3ChcJqz24MgdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '2cb0b6972c64618e67db358e59bbab03
Issue';

$pushID = 'Ud2f9a8bbdd6e167dff9923cf2e718a73';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







