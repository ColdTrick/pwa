<?php

echo elgg_view_field([
	'#type' => 'button',
	'class' => 'elgg-button-action',
	'text' => elgg_echo('pwa:offline:reload'),
	'onclick' => 'window.location.reload()',
]);
