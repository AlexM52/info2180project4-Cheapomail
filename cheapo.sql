/*
DROP DATABASE IF EXISTS cheapomail;
CREATE DATABASE cheapomail;
USE cheapomail;
*/

/*DROP TABLE IF EXISTS user;*/
CREATE TABLE user (
	id int(5) NOT NULL auto_increment,
	first_name char(20) NOT NULL default '',
	last_name char(20) NOT NULL default '',
	password char(20) NOT NULL,
	username char(20) NOT NULL,
	PRIMARY KEY (ID)) ENGINE=MyISAM;

/*DROP TABLE IF EXISTS message;*/
CREATE TABLE message (
	id int(10) NOT NULL auto_increment,
	body text NOT NULL default '',
	subject char(50) NOT NULL default '',
	user_id int(5) NOT NULL,
	recipient_ids int(20) NOT NULL,
	PRIMARY KEY (ID)) ENGINE=MyISAM;

/*DROP TABLE IF EXISTS message_read;*/
CREATE TABLE message_read (
	id int(10) NOT NULL auto_increment,
	message_id char(20) NOT NULL default '',
	reader_id char(20) NOT NULL default '',
	date DATETIME NOT NULL,
	PRIMARY KEY (ID)) ENGINE=MyISAM;

