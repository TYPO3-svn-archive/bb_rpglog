<?php
class Tx_Bb_rpglog_Domain_Model_Player extends Tx_Extbase_DomainObject_AbstractEntity{
	
	/**
	 * @var int
	 */
	protected $userid;
	
	/**
	 * @var string
	 */
	protected $name='';
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Bb_rpglog_Domain_Model_Character>
	 * @todo Getter und Setter
	 */
	protected $chars;
	
	public function getUserid() {
		return $this->userid;
	}

	public function getName() {
		return $this->name;
	}

	public function setUserid($userid) {
		$this->userid = $userid;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function __construct($userid){
		$this->setUserid($userid);
	}
}