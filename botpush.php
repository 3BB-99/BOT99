<?php



require "vendor/autoload.php";

$access_token = 'KQsY26utyWpQWn/vuUjn4MPkmBwg+ukGe0qxghFvILJ2SxNzq71TLdP6nyRRE+7b/7+cnTM6CmlKcAYtvvFv9eNTBnoBSE0yzNBPHTQ7J9uxHO/PHsenUEsVCmbE/8l2uh2oK7SWfiMCMuD1jhnTqQdB04t89/1O/w1cDnyilFU';

$channelSecret = 'b435670511286ebb151a2dc39ed0584d';

$pushID = '1586184584';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







