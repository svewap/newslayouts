<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'newslayouts';
#$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Controller/NewsController'][] = 'newslayouts';


