<?php


$permissions = [
	'notify', 'friends', 'photos', 'audio', 'video', 'docs', 'notes',
	'pages', 'status', 'wall', 'groups', 'massages', 'email', 'notifications',
	'stats', 'ads', 'market', 'offline'
];

$reguest_params = [
	'client_id' => '5780506',
	'redirect_uri' => 'https://oauth.vk.com/blank.html',
	'response_type' => 'token',
	'display' => 'page',
	'scope' => implode(',', $permissions)
];

$url = 'https://oauth.vk.com/authorize?' . http_build_query( $reguest_params );
echo $url;

//c8e2ebf28ba6ab8bae41a6b5bdcfee74438f67e6d715d2a8d5ac8265523d0c762888a9536fde52059d714