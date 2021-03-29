<?php

$config = [
	'cache-version' => (string) elgg_get_config('lastcache'),
	'service-worker-url' => elgg_generate_url('service-worker'),
	'scope' => parse_url(elgg_get_site_url(), PHP_URL_PATH),
	'content-url' => elgg_get_simplecache_url('resources/pwa/offline.html'),
	'assets' => [
		elgg_get_simplecache_url('page/elements/offline.css'),
		elgg_get_simplecache_url('page/elements/offline.js'),
	],
];

if (elgg_get_plugin_setting('use_cached_service_worker', 'pwa')) {
	$config['service-worker-url'] = elgg_get_simplecache_url('pwa/upup/upup.sw.js');
}

$plugin = elgg_get_plugin_from_id('pwa');
if ($plugin->hasIcon('pwa_192', 'pwa')) {
	$config['assets'][] = $plugin->getIconURL([
		'size' => 'pwa_192',
		'type' => 'pwa',
	]);
}

?>

// boot UpUp
UpUp.start(<?php echo json_encode($config, JSON_PRETTY_PRINT); ?>);
