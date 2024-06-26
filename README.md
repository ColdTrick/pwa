# Progressive Web App

![Elgg 6.0](https://img.shields.io/badge/Elgg-6.0-green.svg)
![Lint Checks](https://github.com/ColdTrick/pwa/actions/workflows/lint.yml/badge.svg?event=push)
[![Latest Stable Version](https://poser.pugx.org/coldtrick/pwa/v/stable.svg)](https://packagist.org/packages/coldtrick/pwa)
[![License](https://poser.pugx.org/coldtrick/pwa/license.svg)](https://packagist.org/packages/coldtrick/pwa)

Provides Progressive Web App features

# Features

- Icon upload
- Background color selection
- Color scheme selection
- Browser UI selection

# Service Worker Caching

To reduce the requests to your site, you can enable Service Worker caching in the plugin settings. 
Be aware that if you enable service worker caching, you will need to make the following adjustment in your .htaccess file:

```
<IfModule mod_headers.c>
	Header set Service-Worker-Allowed "/" "expr=%{THE_REQUEST} =~ m#upup.sw.js#"
</IfModule>
```

# De-installing the plugin

Be aware that when you remove the PWA plugin the service workers that have been installed will not remove themselves.
You might need something like https://github.com/NekR/self-destroying-sw.
