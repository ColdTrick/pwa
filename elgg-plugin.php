<?php

use ColdTrick\PWA\Bootstrap;

$composer_path = '';
if (is_dir(__DIR__ . '/vendor')) {
	$composer_path = __DIR__ . '/';
}

return [
	'plugin' => [
		'version' => '1.1',
	],
	'bootstrap' => Bootstrap::class,
	'settings' => [
		'background_color' => '#fafafa',
		'display_mode' => 'standalone',
		'theme_color' => '#0078ac',
		'installable' => 'default',
		'use_cached_service_worker' => false,
	],
	'hooks' => [
		'action:validate' => [
			'plugins/settings/save' => [
				'\ColdTrick\PWA\PluginSettings::actionValidation' => [],
			],
		],
		'entity:pwa:sizes' => [
			'object' => [
				'\ColdTrick\PWA\Icons::getPWASizes' => [],
			],
		],
		'head' => [
			'page' => [
				'\ColdTrick\PWA\Head::addMetaHeaders' => [],
			],
		],
		'register' => [
			'menu:footer' => [
				'\ColdTrick\PWA\Menus::registerFooterInstall' => [],
			],
		],
	],
	'routes' => [
		'offline.html' => [
			'path' => '/offline.html',
			'resource' => 'pwa/offline.html',
			'walled' => false,
		],
		'service-worker' => [
			'path' => '/service-worker',
			'controller' => '\ColdTrick\PWA\Controllers\ServiceWorker',
			'walled' => false,
		],
	],
	'views' => [
		'default' => [
			'pwa/upup/' => $composer_path . 'vendor/npm-asset/upup/src/',
		],
	],
	'view_extensions' => [
		'pwa/upup/upup.js' => [
			'pwa/upup.config.js' => [],
		],
	],
];
