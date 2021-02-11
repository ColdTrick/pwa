<?php

namespace ColdTrick\PWA;

class Head {
	
	/**
	 * Add meta headers
	 *
	 * @param \Elgg\Hook $hook 'head', 'page'
	 *
	 * @return array
	 */
	public static function addMetaHeaders(\Elgg\Hook $hook) {
		$result = $hook->getValue();
		
		$result['metas']['theme-color'] = [
			'name' => 'theme-color',
			'content' => elgg_get_plugin_setting('theme_color', 'pwa'),
		];
		
		return $result;
	}
}
