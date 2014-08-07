CREATE TABLE tx_gjoexamplerelation_domain_model_ownermanytooneuniperson (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  string_without_break varchar(255) NOT NULL DEFAULT '',

  PRIMARY KEY (uid),
  KEY parent (pid),
);