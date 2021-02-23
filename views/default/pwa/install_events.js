function showPWAInstallPromotion() {
	$('.elgg-menu-item-pwa-installable').removeClass('hidden').on('click', function(event) {
		event.preventDefault();
		
		// show install dialog
		deferredPrompt.prompt();
		
		deferredPrompt = null;
		
		$('.elgg-menu-item-pwa-installable').addClass('hidden');
	});
};

function appInstalledEventHandler() {
	// placeholder for app installed event
};
