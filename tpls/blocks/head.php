<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- META FOR IOS & HANDHELD -->
<?php if ($this->getParam('responsive', 1)): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
<?php endif ?>
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<!-- //META FOR IOS & HANDHELD -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin" rel="stylesheet" type="text/css" />
<?php
// SYSTEM CSS
$this->addStyleSheet(JUri::base(true) . '/templates/system/css/system.css');
?>

<?php
// T3 BASE HEAD
$this->addHead();
?>



<?php
// CUSTOM CSS
if (is_file(T3_TEMPLATE_PATH . '/css/custom_20180912.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL . '/css/custom_20180912.css');
}
?>

<?php
// CUSTOM CSS
if (is_file(T3_TEMPLATE_PATH . '/css/riacustom.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL . '/css/riacustom.css');
}
if (is_file(T3_TEMPLATE_PATH . '/css/proteon.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL . '/css/proteon.css');
}
?>

<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script type="text/javascript" src="<?php echo T3_URL ?>/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
