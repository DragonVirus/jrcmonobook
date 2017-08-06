<?php

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'JRCMonoBook' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['JRCMonoBook'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for MonoBook skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This is the modified version of MonoBook Skin. This version of JRCMonoBook skin requires MediaWiki 1.25+' );
}
