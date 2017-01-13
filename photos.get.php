<?php

$fields = ['id', 'album_id', 'owner_id', 'user_id', 'photo_75', 'photo_130', 'photo_604', 'text', 'date', 'post_id'];

$reguest_params = [
	'owner_id' => '34713479',
	'album_id' => '237463638',
	'photo_ids' => '440193904',
	'count' => 1,
	'fields' => implode(',', $fields),
	'access_token' => 'c8e2ebf28ba6ab8bae41a6b5bdcfee74438f67e6d715d2a8d5ac8265523d0c762888a9536fde52059d714'
	];

$url = "https://api.vk.com/method/photos.get?" . http_build_query($reguest_params);
$result = file_get_contents($url);
echo $result;