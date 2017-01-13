<?php

$fields = ['id', 'from_id', 'message', 'date', 'gift', 'privacy'];

$reguest_params = [
	'user_id' => '60974472',
	'count' => 5,
	'fields' => implode(',', $fields),
	'access_token' => 'c8e2ebf28ba6ab8bae41a6b5bdcfee74438f67e6d715d2a8d5ac8265523d0c762888a9536fde52059d714'
	];

$url = "https://api.vk.com/method/gifts.get?" . http_build_query($reguest_params);
$result = file_get_contents($url);
echo $result;