<?php

namespace ColdTrick\PWA;

class PluginSettings {
	
	/**
	 * Listen to the action validation for plugin settings save to update the PWA icons
	 *
	 * @param \Elgg\Hook $hook 'action:validate', 'plugin/settings/save'
	 *
	 * @return void
	 */
	public static function actionValidation(\Elgg\Hook $hook) {
		/* @var $request \Elgg\Request */
		$request = $hook->getParam('request');
		
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
