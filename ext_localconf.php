<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


/** @var \TYPO3\CMS\Core\Resource\Driver\DriverRegistry $registry */
$registry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Resource\Driver\DriverRegistry');
$registry->registerDriverClass('TYPO3\FalGoogleDrive\Driver\GoogleDriveDriver', 'GoogleDrive', 'Google Drive', 'FILE:EXT:fal_google_drive/Configuration/FlexForm/DriverFlexForm.xml');