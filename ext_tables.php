<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


//# Add page TSConfig
$pageTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TsConfig/Page/config.ts');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($pageTsConfig);


/* add backend css */
$GLOBALS['TBE_STYLES']['skins']['backend']['stylesheetDirectories']['newslayouts'] = 'EXT:newslayouts/Resources/Public/CSS/Backend/';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'News article layouts');
