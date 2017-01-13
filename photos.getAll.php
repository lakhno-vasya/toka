<?php

$fields = ['scr', 'widht', 'height', 'type', 'likes', 'repost'];

$reguest_params = [
	'owner_id' => '23116834',
	'extended' => '1',
	'count' => 100,
	'fields' => implode(',', $fields),
	'access_token' => 'c8e2ebf28ba6ab8bae41a6b5bdcfee74438f67e6d715d2a8d5ac8265523d0c762888a9536fde52059d714'
	];

$url = "https://api.vk.com/method/photos.getAll?" . http_build_query($reguest_params);
$result = file_get_contents($url);
// $arr1 = json_decode($result, true);
// 	foreach( $arr1[0] as value) {
//     echo (value . /n);
// }
// echo $s;
echo $result;