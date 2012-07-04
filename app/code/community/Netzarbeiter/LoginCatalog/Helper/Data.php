<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension
 * to newer versions in the future.
 *
 * @category   Netzarbeiter
 * @package    Netzarbeiter_LoginCatalog
 * @copyright  Copyright (c) 2012 Vinai Kopp http://netzarbeiter.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Netzarbeiter_LoginCatalog_Helper_Data extends Mage_Core_Helper_Abstract
{

	/**
	 * Return the config value for the passed key
	 */
	public function getConfig($key)
	{
		$path = 'catalog/logincatalog/' . $key;
		return Mage::getStoreConfig($path, Mage::app()->getStore());
	}

	/**
	 * Check if the extension has been disabled in the system configuration
	 */
	public function moduleActive()
	{
		return !(bool)$this->getConfig('disable_ext');
	}
}

