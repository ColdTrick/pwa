<?php

$plugin = elgg_get_plugin_from_id('pwa');

$content = '';

if ($plugin->hasIcon('pwa_192', 'pwa')) {
	$content .= elgg_format_element('div', ['class' => 'pwa-offline', 'style' => 'background-image: url("' . $plugin->getIconURL([
		'size' => 'pwa_192',
		'type' => 'pwa',
	]) . '")']);
}

$content .= elgg_echo('pwa:offline:content');

echo elgg_view_page(elgg_echo('pwa:offline:title'), [
	'content' => $content,
	'title' => false,
], 'offline');
