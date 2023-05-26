<?php

namespace ColdTrick\PWA\Menus;

use Elgg\Menu\MenuItems;

/**
 * Add menu items to the footer menu
 */
class Footer {

	/**
	 * Add footer menu items
	 *
	 * @param \Elgg\Event $event 'register', 'menu:footer'
	 *
	 * @return MenuItems
	 */
	public static function registerInstall(\Elgg\Event $event): MenuItems {
		/* @var $returnvalue MenuItems */
		$returnvalue = $event->getValue();
		
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
