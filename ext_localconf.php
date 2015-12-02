<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {
	// add page TSConfig which extends the news types
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page/mod.tx_news_domain_model_news.txt">');
}