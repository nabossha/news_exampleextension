<?php
defined('TYPO3_MODE') or die();

// adds new relation to page with author profile
$tempColumns = Array (
	'authorprofile' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:news_exampleextension/Resources/Private/Language/locallang_db.xlf:tx_newsexampleextension_domain_model_news.authorprofile',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'foreign_table' => 'pages',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest',
				),
			),
		),
	),
);

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {
	// register new news types
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogText'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogImage'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogVideo'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogEvent'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];

	// add individual type icons
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogText'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogText.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogImage'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogImage.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogVideo'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogVideo.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogEvent'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogEvent.png';

	// add author profile only to above registered news types
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'authorprofile;;;;1-1-1', 'blogText,blogImage,blogVideo,blogEvent', 'after:related_from');
}