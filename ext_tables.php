<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Newstemplates Fluidbootstraptheme');



