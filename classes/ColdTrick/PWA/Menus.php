<?php

namespace ColdTrick\PWA;

/**
 * Menus
 */
class Menus {

	/**
	 * Add footer menu items
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:footer'
	 *
	 * @return array
	 */
	public static function registerFooterInstall(\Elgg\Hook $hook) {
		$returnvalue = $hook->getValue();
		
		$returnvalue[] = \ElggMenuItem::factory([
			'name' => 'pwa-installable',
			'icon' => 'mobile-alt',
			'text' => elgg_echo('pwa:install'),
			'href' => false,
			'item_class' => 'hidden',
		]);
		
		return $returnvalue;
	}
}
