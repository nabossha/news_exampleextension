<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$_EXTKEY = $GLOBALS['_EXTKEY'] = 'news_exampleextension';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Additional types for EXT:news');
