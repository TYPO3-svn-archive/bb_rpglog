<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
/** Zu reinigen **/
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_bbrpglog_character=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_bbrpglog_group=1
');
t3lib_extMgm::addPageTSConfig('

	# ***************************************************************************************
	# CONFIGURATION of RTE in table "tx_bbrpglog_group", field "description"
	# ***************************************************************************************
RTE.config.tx_bbrpglog_group.description {
  hidePStyleItems = H1, H4, H5, H6
  proc.exitHTMLparser_db=1
  proc.exitHTMLparser_db {
    keepNonMatchedTags=1
    tags.font.allowedAttribs= color
    tags.font.rmTagIfNoAttrib = 1
    tags.font.nesting = global
  }
}
');

Tx_Extbase_Utility_Extension::configurePlugin($_EXTKEY,'list',array('Character'=>'list'));
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'list','Characterliste');
?>