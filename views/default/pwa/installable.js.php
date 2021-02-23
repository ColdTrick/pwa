<?php
$plugin = elgg_get_plugin_from_id('pwa');
?>
define(['jquery'], function($) {
	
	// Initialize deferredPrompt for use later to show browser install prompt.
	let deferredPrompt;

	window.addEventListener('beforeinstallprompt', (e) => {
		// Stash the event so it can be triggered later.
		deferredPrompt = e;
		
		<?php if ($plugin->installable !== 'default') { ?>
		// Prevent the mini-infobar from appearing on mobile
		e.preventDefault();
		
		
		<?php if ($plugin->installable === 'custom') { ?>
		// Update UI notify the user they can install the PWA
		showPWAInstallPromotion();
		<?php } ?>
		<?php } ?>
	});
	
	window.addEventListener('appinstalled', () => {
		// Handle app installed event
		appInstalledEventHandler();
		
		// Clear the deferredPrompt so it can be garbage collected
		deferredPrompt = null;
	});

	<?php
	
	// the following view contains the code for showPWAInstallPromotion()
	echo elgg_view('pwa/install_events.js');
	
	?>
});
