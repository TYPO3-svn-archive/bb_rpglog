<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_bbrpglog_characer'] = array (
	'ctrl' => $TCA['tx_bbrpglog_characer']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,player,name,avatar'
	),
	'feInterface' => $TCA['tx_bbrpglog_characer']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'player' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_characer.player',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'fe_users',	
				'foreign_table_where' => 'ORDER BY fe_users.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_characer.name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'avatar' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_characer.avatar',		
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'gif,png,jpeg,jpg',	
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],	
				'uploadfolder' => 'uploads/tx_bbrpglog',
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, player, name, avatar')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_bbrpglog_group'] = array (
	'ctrl' => $TCA['tx_bbrpglog_group']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,name,description,member'
	),
	'feInterface' => $TCA['tx_bbrpglog_group']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_group.name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'description' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_group.description',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly'       => 1,
						'type'          => 'script',
						'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
						'icon'          => 'wizard_rte2.gif',
						'script'        => 'wizard_rte.php',
					),
				),
			)
		),
		'member' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_group.member',		
			'config' => array (
				'type' => 'group',	
				'internal_type' => 'db',	
				'allowed' => 'tx_bbrpglog_characer',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,	
				"MM" => "tx_bbrpglog_group_member_mm",
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, description;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_bbrpglog/rte/], member')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_bbrpglog_rules'] = array (
	'ctrl' => $TCA['tx_bbrpglog_rules']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,name,class'
	),
	'feInterface' => $TCA['tx_bbrpglog_rules']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_rules.name',		
			'config' => array (
				'type' => 'none',
			)
		),
		'class' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:bb_rpglog/locallang_db.xml:tx_bbrpglog_rules.class',		
			'config' => array (
				'type' => 'none',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, class')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>