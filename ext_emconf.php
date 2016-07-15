<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "export_tt_products"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Export tt_products Task',
	'description' => 'This extension offers the tt_products export tasks for the Export extension which bases on the Scheduler. The tt_products orders can be saved into a csv file.',
	'category' => 'be',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'php' => '5.6.0-7.99.99',
			'typo3' => '6.2.5-7.6.99',
			'div2007' => '1.6.12-0.0.0',
			'export' => '0.0.1-0.1.0',
			'tt_products' => '1.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);