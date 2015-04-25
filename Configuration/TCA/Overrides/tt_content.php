<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$_EXTKEY = $GLOBALS['_EXTKEY'] = 'news_exampleextension';

ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Additional types for EXT:news');
