<?php

namespace JambageCom\ExportTtProducts\Hooks;


/***************************************************************
*  Copyright notice
*
*  (c) 2016 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * export_tt_products Export Api
 *
 * @author	Franz Holzinger <franz@ttproducts.de>
 * @maintainer Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage export
 */


class ExportHooks {

	public function getDefinitionArray() {
		$hookDefinitionArray =
			array(
				'ext' => 'export_tt_products',
				'class' => 'JambageCom\\ExportTtProducts\\Api\\ExportApi',
				'tables' => array(
					array(
						'table' => 'sys_products_orders',
						'title' => 'Bestellungen'
					),
					array(
						'table' => 'test',
						'title' => 'Test'
					),
				)
			);

		return $hookDefinitionArray;
	}
}


