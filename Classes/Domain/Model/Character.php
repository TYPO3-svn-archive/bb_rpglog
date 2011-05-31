<?php
class Tx_Bb_rpglog_Domain_Model_Character extends Tx_Extbase_DomainObject_AbstractEntity {
	/**
	 * @var Tx_Bb_rpglog_Domain_Model_Player
	 */
	protected $player = null;
	
	/**
	 * @var int
	 */
	protected $uid = 0;
	
	/**
	 * @var string
	 */
	protected $name = '';
	
	/**
	 * @var string
	 */
	protected $avatarhash = '';
	
	/**
	 * @var string
	 */
	protected $avatarname = '';
	
	/**
	 * @var string
	 */
	protected $profiltext='';
	
	/**
	 * @var string
	 */
	protected $profiltext_uncached='';
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Bb_rpglog_Domain_Model_Group>
	 * @todo Getter und Setter
	 */
	protected $groups;
	
	/**
	 * @return the $player
	 */
	public function getPlayer() {
		return $this->player;
	}
	
	/**
	 * @return the $uid
	 */
	public function getUid() {
		return $this->uid;
	}
	
	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @return the $avatarhash
	 */
	public function getAvatarhash() {
		return $this->avatarhash;
	}
	
	/**
	 * @return the $avatarname
	 */
	public function getAvatarname() {
		return $this->avatarname;
	}
	
	/**
	 * @param $player the $player to set
	 */
	public function setPlayer($player) {
		$this->player = $player;
	}
	
	/**
	 * @param $uid the $uid to set
	 */
	public function setUid($uid) {
		$this->uid = $uid;
	}
	
	/**
	 * @param $name the $name to set
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * @param $avatarhash the $avatarhash to set
	 */
	public function setAvatarhash($avatarhash) {
		$this->avatarhash = $avatarhash;
	}
	
	/**
	 * @param $avatarname the $avatarname to set
	 */
	/**
	 * @return the $text
	 */
	public function getProfiltext() {
		return $this->profiltext;
	}

	/**
	 * @return the $uncached_text
	 */
	public function getProfiltext_uncached() {
		return $this->profiltext_uncached;
	}

	/**
	 * @param $text the $text to set
	 */
	public function setProfiltext($text) {
		$this->profiltext = $text;
	}

	/**
	 * @param $uncached_text the $uncached_text to set
	 */
	public function setProfiltext_uncached($uncached_text) {
		$this->profiltext_uncached = $uncached_text;
	}

	public function setAvatarname($avatarname) {
		$this->avatarname = $avatarname;
	}
	
	public function __construct($player = null, $uid = 0, $name = '', $avatarhash = '', $avatarname = '',$text='',$uncached_text) {
		$this->setPlayer ( $player );
		$this->setUid ( $uid );
		$this->setName ( $name );
		$this->setAvatarhash ( $avatarhash );
		$this->setAvatarname ( $avatarname );
		$this->setText($text);
		$this->setUncached_text($uncached_text);
	}
}