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
	/*recipient_ids int(20) NOT NULL,		*/
	recipient_ids varchar(20) NOT NULL,
	PRIMARY KEY (ID)) ENGINE=MyISAM;

/*DROP TABLE IF EXISTS message_read;*/
CREATE TABLE message_read (
	id int(10) NOT NULL auto_increment,
	message_id char(20) NOT NULL default '',
	reader_id char(20) NOT NULL default '',
	date DATETIME NOT NULL,
	PRIMARY KEY (ID)) ENGINE=MyISAM;

LOCK TABLES user WRITE;
INSERT INTO user VALUES (1, 'John', 'Doe', 'bar', 'foo'),
(2, 'Jane', 'Doe', 'fu', 'sna'), (3, 'Alice', 'Brown', 'wonderland', 'alice'),
(4, 'Bob', 'Smith', 'sled', 'iambob'), (5, 'Test', 'User', 'pass', 'test');
UNLOCK TABLES;

LOCK TABLES message WRITE;
INSERT INTO message VALUES (1, 'Lorem ipsum dolor sit amet...', 'Lorem message', 1, ' 5,'),
(2, 'Literature admiration frequently indulgence announcing are who you her. Was least quick after six.', 'Random', 2, ' 5,'),
(3, 'Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy expenses.', 'Something', 3, ' 2, 1,'),
(4, 'Her engrossed deficient northward and neglected favourite newspaper. ', 'Newspaper', 4, ' 1, 2,'),
(5, 'But use peculiar produced concerns ten. ', 'Terminated principles', 1, ' 3, 5'),
(6, 'If on prevailed concluded ye abilities. Address say you new but minuter greater.', 'Perpetual sincerity', 1, ' 5, 4'),
(7, 'testestestewstestestestestes test testest test testy test', 'test subject', 1, ' 2, 5, 4, 15,');
UNLOCK TABLES;