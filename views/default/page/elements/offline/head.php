<?php

$metas = elgg_extract('metas', $vars, []);

echo elgg_format_element('title', [], elgg_extract('title', $vars), ['encode_text' => true]);
foreach ($metas as $attributes) {
	echo elgg_format_element('meta', $attributes);
}
echo elgg_format_element('script', ['src' => elgg_get_simplecache_url('page/elements/offline.js')]);

echo elgg_format_element('link', ['rel' => 'stylesheet', 'href' => elgg_get_simplecache_url('page/elements/offline.css')]);
