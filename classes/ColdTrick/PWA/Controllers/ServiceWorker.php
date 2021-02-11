<?php

namespace ColdTrick\PWA\Controllers;

/**
 * Respond to the service-worker route
 */
class ServiceWorker {
	
	/**
	 * Handle the request
	 *
	 * @param \Elgg\Request $request the Elgg request
	 *
	 * @return \Elgg\Http\ResponseBuilder
	 */
	public function __invoke(\Elgg\Request $request) {
		elgg_set_http_header('Content-type: application/javascript;charset=utf-8', true);
		
		return elgg_ok_response(elgg_view('pwa/upup/upup.sw.js'));
	}
}
