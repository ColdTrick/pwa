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


// constructing html here to prevent hook/view extensions
elgg_set_http_header("Content-type: text/html; charset=UTF-8");

$lang = elgg_get_current_language();

$default_html_attrs = [
	'xmlns' => 'http://www.w3.org/1999/xhtml',
	'xml:lang' => $lang,
	'lang' => $lang,
];
$html_attrs = elgg_extract('html_attrs', $vars, []);
$html_attrs = array_merge($default_html_attrs, $html_attrs);

$body_attrs = elgg_extract('body_attrs', $vars, []);
?>
<!DOCTYPE html>
<?php

$head = elgg_format_element('head', [], elgg_view('page/elements/offline/head', elgg_extract('head', $vars, [])));

echo elgg_format_element('html', $html_attrs, $head . $body);
