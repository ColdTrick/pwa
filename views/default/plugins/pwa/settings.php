<?php

/* @var $plugin \ElggPlugin */
$plugin = elgg_extract('entity', $vars);

// force cache reset on save (for simplecaches manifest.json)
echo elgg_view_field([
	'#type' => 'hidden',
	'name' => 'flush_cache',
	'value' => 1,
]);

echo elgg_view_field([
	'#type' => 'select',
	'#label' => elgg_echo('pwa:settings:display_mode'),
	'#help' => elgg_echo('pwa:settings:display_mode:help'),
	'name' => 'params[display_mode]',
	'options_values' => [
		'fullscreen' => elgg_echo('pwa:settings:display_mode:fullscreen'),
		'standalone' => elgg_echo('pwa:settings:display_mode:standalone'),
		'minimal-ui' => elgg_echo('pwa:settings:display_mode:minimal-ui'),
		'browser' => elgg_echo('pwa:settings:display_mode:browser'),
	],
	'value' => $plugin->display_mode,
]);

echo elgg_view_field([
	'#type' => 'color',
	'#label' => elgg_echo('pwa:settings:background_color'),
	'#help' => elgg_echo('pwa:settings:background_color:help'),
	'name' => 'params[background_color]',
	'value' => $plugin->background_color,
]);

echo elgg_view_field([
	'#type' => 'color',
	'#label' => elgg_echo('pwa:settings:theme_color'),
	'#help' => elgg_echo('pwa:settings:theme_color:help'),
	'name' => 'params[theme_color]',
	'value' => $plugin->theme_color,
]);

echo elgg_view_field([
	'#type' => 'fieldset',
	'#label' => elgg_echo('pwa:settings:icons'),
	'fields' => [
		[
			'#html' => elgg_view('entity/edit/icon', [
				'entity' => $plugin,
				'icon_type' => 'pwa',
				'thumb_size' => '192',
				'cropper_enabled' => true,
			]),
		],
	],
]);

echo elgg_view_field([
	'#type' => 'select',
	'#label' => elgg_echo('pwa:settings:installable'),
	'#help' => elgg_echo('pwa:settings:installable:help'),
	'name' => 'params[installable]',
	'options_values' => [
		'default' => elgg_echo('pwa:settings:installable:default'),
		'custom' => elgg_echo('pwa:settings:installable:custom'),
		'disabled' => elgg_echo('pwa:settings:installable:disabled'),
	],
	'value' => $plugin->installable,
]);

echo elgg_view_field([
	'#type' => 'checkbox',
	'#label' => elgg_echo('pwa:settings:use_cached_service_worker'),
	'#help' => elgg_echo('pwa:settings:use_cached_service_worker:help'),
	'name' => 'params[use_cached_service_worker]',
	'checked' => (bool) $plugin->use_cached_service_worker,
	'switch' => true,
	'default' => 0,
	'value' => 1,
]);
