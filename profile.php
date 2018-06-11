<?php


$access_token = 'KQsY26utyWpQWn/vuUjn4MPkmBwg+ukGe0qxghFvILJ2SxNzq71TLdP6nyRRE+7b/7+cnTM6CmlKcAYtvvFv9eNTBnoBSE0yzNBPHTQ7J9uxHO/PHsenUEsVCmbE/8l2uh2oK7SWfiMCMuD1jhnTqQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ufe1fde600f71beff16c68ab22270cc78';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

