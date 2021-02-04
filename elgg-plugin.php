<?php

return [
	'settings' => [
		'background_color' => '#fafafa',
		'display_mode' => 'standalone',
		'theme_color' => '#0078ac',
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
	],
];
