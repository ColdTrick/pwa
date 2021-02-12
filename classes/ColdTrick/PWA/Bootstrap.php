<?php

namespace ColdTrick\PWA;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {
	
	/**
	 * {@inheritDoc}
	 */
	public function init() {
		elgg_register_external_file('js', 'upup', elgg_get_simplecache_url('pwa/upup/upup.js'));
		elgg_load_external_file('js', 'upup');
		
		elgg_register_simplecache_view('page/elements/offline.css');
	}
}
