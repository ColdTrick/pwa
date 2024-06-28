<?php

use ColdTrick\PWA\Bootstrap;

$composer_path = '';
if (is_dir(__DIR__ . '/vendor')) {
	$composer_path = __DIR__ . '/';
}

return [
	'plugin' => [
		'version' => '5.0',
		'name' => 'Progressive Web App',
	],
	'bootstrap' => Bootstrap::class,
	'settings' => [
		'background_color' => '#fafafa',
		'display_mode' => 'standalone',
		'theme_color' => '#0078ac',
		'installable' => 'default',
		'use_cached_service_worker' => false,
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
	'events' => [
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
				'\ColdTrick\PWA\Menus\Footer::registerInstall' => [],
			],
		],
	],
	'views' => [
		'default' => [
			'pwa/upup/upup.js' => $composer_path . 'vendor/npm-asset/upup/src/upup.js',
		],
	],
	'view_extensions' => [
		'pwa/upup/upup.js' => [
			'pwa/upup.config.js' => [],
		],
	],
	'view_options' => [
		'page/elements/offline.css' => ['simplecache' => true],
		'pwa/installable.mjs' => ['simplecache' => true],
		'pwa/upup/upup.sw.js' => ['simplecache' => true],
		'resources/pwa/offline.html' => ['simplecache' => true],
	],
];
