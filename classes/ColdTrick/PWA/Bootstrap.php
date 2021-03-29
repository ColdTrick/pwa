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
		elgg_register_simplecache_view('pwa/upup/upup.sw.js');
		elgg_register_simplecache_view('resources/pwa/offline.html');
		
		elgg_define_js('pwa/installable', [
			'src' => elgg_get_simplecache_url('pwa/installable.js'),
		]);
		elgg_require_js('pwa/installable');
	}
}
