CREATE TABLE tx_gjoexamplerelation_domain_model_ownermanytooneuniperson (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  string_without_break varchar(255) NOT NULL DEFAULT '',

  PRIMARY KEY (uid),
  KEY parent (pid),
);

CREATE TABLE tx_gjoexamplerelation_domain_model_onetomanyblog (

  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  title varchar(255) DEFAULT '' NOT NULL,

  posts_counter int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),
);

CREATE TABLE tx_gjoexamplerelation_domain_model_onetomanypost (

  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,

	blog_id int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),
);