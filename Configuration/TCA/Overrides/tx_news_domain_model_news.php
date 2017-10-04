<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$fields = [
    'layout' => [
        'exclude' => true,
        'label' => 'LLL:EXT:newslayouts/Resources/Private/Language/locallang_db.xlf:layout',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Layout 1', 'layout1', 'EXT:newslayouts/Resources/Public/Icons/tx_styleguide.svg'],
                ['Layout 2', 'layout2', 'EXT:newslayouts/Resources/Public/Icons/tx_styleguide.svg'],
            ],
            'minitems' => 0,
            'maxitems' => 1
        ],
    ],
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'layout,', '', 'after:title');
