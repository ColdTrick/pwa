<?php

namespace ColdTrick\PWA;

class Icons {
	
	/**
	 * Set the correct icon sizes for the pwa
	 *
	 * @param \Elgg\Hook $hook 'entity:pwa:sizes', 'object'
	 *
	 * @return void|array
	 */
	public static function getPWASizes(\Elgg\Hook $hook) {
		
		if ($hook->getParam('entity_subtype') !== 'plugin') {
			return;
		}
		
		$result = $hook->getValue();
		
		$result['pwa_192'] = [
			'w' => 192,
			'h' => 192,
			'square' => true,
			'upscale' => true,
			'crop' => true,
		];
		$result['pwa_512'] = [
			'w' => 512,
			'h' => 512,
			'square' => true,
			'upscale' => true,
			'crop' => true,
		];
		
		return $result;
	}
}
