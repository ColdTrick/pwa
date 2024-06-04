<?php

namespace ColdTrick\PWA;

use Elgg\DefaultPluginBootstrap;

/**
 * Plugin bootstrap
 */
class Bootstrap extends DefaultPluginBootstrap {
	
	/**
	 * {@inheritdoc}
	 */
	public function init() {
		elgg_register_external_file('js', 'upup', elgg_get_simplecache_url('pwa/upup/upup.js'));
		elgg_load_external_file('js', 'upup');
		
		elgg_import_esm('pwa/installable');
	}
}
