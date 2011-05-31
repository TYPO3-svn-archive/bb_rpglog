#
# Table structure for table 'tx_bbrpglog_characer'
#
CREATE TABLE tx_bbrpglog_character (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	player int(11) unsigned DEFAULT '0' NOT NULL,
	name tinytext,
	avatarhash tinytext,
	avatar tinytext,
	profiltext text,
	profiltext_unhashed text,

	
	PRIMARY KEY (uid),
	KEY parent (pid)
);




#
# Table structure for table 'tx_bbrpglog_group_member_mm'
# 
#
CREATE TABLE tx_bbrpglog_group_member_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_bbrpglog_group'
#
CREATE TABLE tx_bbrpglog_group (
	uid int(11) unsigned NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	profiltext text,
	profiltext_uncached text,
	member int(11) unsigned DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_bbrpglog_rules'
#
#CREATE TABLE tx_bbrpglog_rules (
#	uid int(11) NOT NULL auto_increment,
#	pid int(11) DEFAULT '0' NOT NULL,
#	tstamp int(11) DEFAULT '0' NOT NULL,
#	crdate int(11) DEFAULT '0' NOT NULL,
#	cruser_id int(11) DEFAULT '0' NOT NULL,
#	deleted tinyint(4) DEFAULT '0' NOT NULL,
#	hidden tinyint(4) DEFAULT '0' NOT NULL,
#	name tinytext,
#	class tinytext,
#	
#	PRIMARY KEY (uid),
#	KEY parent (pid)
#);