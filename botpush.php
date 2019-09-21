<?php



require "vendor/autoload.php";

$access_token = 'kiDX4Jxx6EvxwWfzS1R0XpBJr/jI4oiBwvNFw6wwn/W5x+YYON17Dfr17jRhUOMU118ok6QN0arGQRqnpyOX59hRmgwdpyX0V6bC3QDnsNwNe6Qd91ZI1u9dkT22NZjVav64ETHTd6tLegkLJcnMUAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7bf25720c9962839cd67766b18bdd049';

$pushID = 'Ubd326250847b70b0ed00f276eced269f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







