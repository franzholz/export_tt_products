<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


define('EXPORT_TT_PRODUCTS_EXT', $_EXTKEY);


// add the hook for the export extension
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['export']['hook'][$_EXTKEY] = 'JambageCom\\ExportTtProducts\\Hooks\\ExportHooks';
