// boot UpUp
UpUp.debug(true);
UpUp.start({
	'cache-version': '<?php echo elgg_get_config('lastcache'); ?>',
	'content-url': "<?php echo elgg_generate_url('offline.html'); ?>",
	'service-worker-url': '<?php echo elgg_generate_url('service-worker'); ?>',
	'assets': [
		'<?php echo elgg_get_simplecache_url('elgg.css'); ?>'
	]
});
