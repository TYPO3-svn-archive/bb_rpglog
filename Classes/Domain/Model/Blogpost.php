<?php
class Tx_Bb_rpglog_Domain_Model_Blogpost extends Tx_Extbase_DomainObject_AbstractEntity{
	/**
	 * @var Tx_Bb_rpglog_Domain_Model_Character
	 */
	protected $character;
	
	/**
	 * @var string
	 */
	protected $text='';
	
	/**
	 * @var string
	 */
	protected $uncached_text='';
	
	/**
	 * @var int
	 */
	protected $date=0;
}