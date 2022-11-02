<?php
include 'Telegram.php';
$telegram = new Telegram('5654583058:AAHPJUnyknyOEFpAQxgPjHYA6SrzIB7xoKM');

$chat_id=$telegram->ChatID();
$content=array('chat_id'=>$chat_id,'text'=>'SF componyiyasiga hush kelipsiz');
$telegram->sendMessage($content);
//https://api.telegram.org/bot5654583058:AAHPJUnyknyOEFpAQxgPjHYA6SrzIB7xoKM/setWebhook?url=https://github.com/sfarruhbek7/SFCompany/blob/main/newbot.php
?>
