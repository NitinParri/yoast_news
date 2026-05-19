<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'yoast_news',
    'Configuration/TypoScript',
    'Yoast SEO for TYPO3 - EXT:news'
);
