<?php

namespace ColdTrick\PWA;

/**
 * Page head callbacks
 */
class Head {
	
	/**
	 * Add meta headers
	 *
	 * @param \Elgg\Event $event 'head', 'page'
	 *
	 * @return array
	 */
	public static function addMetaHeaders(\Elgg\Event $event) {
		$result = $event->getValue();
		
		$result['metas']['theme-color'] = [
			'name' => 'theme-color',
			'content' => elgg_get_plugin_setting('theme_color', 'pwa'),
		];
		
		return $result;
	}
}
