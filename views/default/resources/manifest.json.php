<?php

elgg_set_http_header('Content-Type: application/json;charset=utf-8');

$site = elgg_get_site_entity();
$plugin = elgg_get_plugin_from_id('pwa');

$result = [];

// basic site information
$result['name'] = html_entity_decode($site->getDisplayName());
$result['short_name'] = elgg_get_excerpt($result['name'], 50);
$result['start_url'] = $site->getURL();
$result['scope'] = $site->getURL();
$result['description'] = (string) $site->description;

// plugin settings
$result['display'] = $plugin->display_mode;
$result['background_color'] = strtoupper($plugin->background_color);
$result['theme_color'] = strtoupper($plugin->theme_color);

// icons
if ($plugin->hasIcon('master', 'pwa')) {
	$sizes = elgg_get_icon_sizes('object', 'plugin', 'pwa');
	foreach ($sizes as $size => $icon_settings) {
		if ($size === 'master') {
			continue;
		}
		
		$result['icons'][] = [
			'src' => $plugin->getIconURL([
				'size' => $size,
				'type' => 'pwa',
			]),
			'type' => 'image/png', // Chrome requires PNGs in order to be installable
			'sizes' => "{$icon_settings['w']}x{$icon_settings['h']}"
		];
	}
}

echo json_encode($result, JSON_PRETTY_PRINT);
