<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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

if (ExtensionManagementUtility::isLoaded('news')) {
	// register new news types
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogText'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogImage'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogVideo'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogEvent'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];

	// add individual type icons
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogText'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogText.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogImage'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogImage.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogVideo'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogVideo.png';
	$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogEvent'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogEvent.png';

	// add author profile only to above registered news types
	ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);
	ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'authorprofile;;;;1-1-1', 'blogText,blogImage,blogVideo,blogEvent', 'after:related_from');
}