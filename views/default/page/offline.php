<?php
/**
 * Offline page shell
 *
 * Used for the PWA offline page
 *
 * @uses $vars['body']        The main content of the page
 */

$content = elgg_extract('body', $vars);

$header = elgg_view('page/elements/offline/header', $vars);
$footer = elgg_view('page/elements/offline/footer', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-offline">
	<div class="elgg-inner">
		<div class="elgg-page-header">
			<div class="elgg-inner">
				$header
			</div>
		</div>
		<div class="elgg-page-body">
			<div class="elgg-inner">
				$content
			</div>
		</div>
		<div class="elgg-page-footer">
			<div class="elgg-inner">
				$footer
			</div>
		</div>
	</div>
</div>
__BODY;

echo elgg_view('page/elements/html', [
	'body' => $body,
	'head' => elgg_view('page/elements/offline/head', elgg_extract('head', $vars, [])),
]);
