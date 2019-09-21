<?php


$access_token = 'kiDX4Jxx6EvxwWfzS1R0XpBJr/jI4oiBwvNFw6wwn/W5x+YYON17Dfr17jRhUOMU118ok6QN0arGQRqnpyOX59hRmgwdpyX0V6bC3QDnsNwNe6Qd91ZI1u9dkT22NZjVav64ETHTd6tLegkLJcnMUAdB04t89/1O/w1cDnyilFU=';

$userId = 'Ubd326250847b70b0ed00f276eced269f';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

