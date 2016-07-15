<?php

$key = 'export_tt_products';

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($key, $script);

return array(
	'JambageCom\\ExportTtProducts\\Api\\ExportApi' => $extensionPath . 'Api/ExportApi.php',
);

