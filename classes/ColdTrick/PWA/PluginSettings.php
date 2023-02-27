<?php

namespace ColdTrick\PWA;

/**
 * Plugin settings callbacks
 */
class PluginSettings {
	
	/**
	 * Listen to the action validation for plugin settings save to update the PWA icons
	 *
	 * @param \Elgg\Event $event 'action:validate', 'plugin/settings/save'
	 *
	 * @return void
	 */
	public static function actionValidation(\Elgg\Event $event) {
		/* @var $request \Elgg\Request */
		$request = $event->getParam('request');
		
		if ($request->getParam('plugin_id') !== 'pwa') {
			return;
		}
		
		$plugin = elgg_get_plugin_from_id('pwa');
		
		if ($request->getParam('icon_remove')) {
			// cleanup icon
			$plugin->deleteIcon('pwa');
			return;
		}
		
		// will try to upload the icon, will fail silently
		$plugin->saveIconFromUploadedFile('icon', 'pwa');
	}
}
