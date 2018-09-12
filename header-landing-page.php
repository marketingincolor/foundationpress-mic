<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TLNW5X');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/dtf4wat.css">
		<!-- End Fonts -->

		<!-- SharSpring Tracking -->
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-UUHGVW.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-YU6QP0']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-UUHGVW.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
		<!-- End SharpSpring Tracking -->

		<script>
			var ss_form_id = '<?php echo the_field('sharpspring_form_id') ?>';
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLNW5X"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

