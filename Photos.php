<?php

$fields = ['nickname', 'domain', 'sex', 'bdate', 'city', 'country', 'timezone', 'photo_200_orig', 'has_mobile', 'contacts', 'education', 'online', 'relation', 'last_seen', 'status', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities'];

$reguest_params = [
	'user_id' => '60974472',
	'order' => 'name',
	'count' => 30,
	'fields' => implode(',', $fields),
	'access_token' => 'c8e2ebf28ba6ab8bae41a6b5bdcfee74438f67e6d715d2a8d5ac8265523d0c762888a9536fde52059d714'
	];

$url = "https://api.vk.com/method/friends.get?" . http_build_query($reguest_params);
$result = file_get_contents($url);
echo $result;