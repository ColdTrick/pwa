<?php 

$core_css = [
	'elements/reset.css',
	'elements/typography.css',
	'elements/buttons.css',
];

foreach ($core_css as $css) {
	echo elgg_view($css);
}

?>
.elgg-page-offline {
	margin: 0 auto;
	padding: 5% 0;
	max-width: 20rem;
	text-align: center;
	
	.elgg-page-header {
		border-bottom: 1px solid $(border-color-soft);
	}
	
	.elgg-page-body {
		margin: 2rem 0;
	}
	
	.pwa-offline {
		margin: 1rem auto;	
		border-radius: 500px;
		border: solid 10px $(border-color-mild);
		width: 100px;
		height: 100px;
		background-size: cover;
		position: relative;
		
		&:before {
			content: '';
			position: absolute;
			top: 35px;
			left: -1px;
			width: 85px;
			height: 10px;
			background-color: $(border-color-mild);
			transform: rotate(45deg);
		}
	}
}
