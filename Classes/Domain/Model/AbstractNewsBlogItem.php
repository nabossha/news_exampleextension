<?php
namespace KWS\NewsExampleextension\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_newsexampleextension
 */
abstract class AbstractNewsBlogItem extends \Tx_News_Domain_Model_News {
	/**
	 * @var integer
	 */
	protected $authorprofile;

	/**
	 * Set author profile
	 *
	 * @param integer $authorprofile author profile
	 * @return void
	 */
	public function setAuthorprofile($authorprofile) {
		$this->authorprofile = $authorprofile;
	}

	/**
	 * Get author profile
	 *
	 * @return integer
	 */
	public function getAuthorprofile() {
		return $this->authorprofile;
	}
}
