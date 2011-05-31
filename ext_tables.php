<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tx_bbrpglog_character'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_character',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY name',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'Resources/Private/Images/Icons/icon_tx_bbrpglog_characer.gif',
	),
);

$TCA['tx_bbrpglog_group'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_group',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'name',	
		'default_sortby' => 'ORDER BY name',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'Resources/Private/Images/Icons/icon_tx_bbrpglog_group.gif',
	),
);

/**$TCA['tx_bbrpglog_rules'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_rules',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'name',	
		'default_sortby' => 'ORDER BY cruser_id',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'Resources/Private/Images/Icons/icon_tx_bbrpglog_rules.gif',
	),
);
**/
	