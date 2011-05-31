<?php
class Tx_Bb_rpglog_Domain_Model_Group extends Tx_Extbase_DomainObject_AbstractEntity{
	/**
	 * @var string
	 */
	protected $name='';
		
	/**
	 * @var string
	 */
	protected $profiltext;
	
	/**
	 * @var string
	 */
	protected $profiltext_uncached;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Bb_rpglog_Domain_Model_Character>
	 * @lazy
	 */
	protected $characters;
	
}