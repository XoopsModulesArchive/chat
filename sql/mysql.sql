CREATE TABLE `chat_delmsg` (
  `delmsgid` int(11) unsigned NOT NULL auto_increment,
  `messid` int(11) unsigned NOT NULL default '0',
  `uid` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`delmsgid`),
  UNIQUE KEY `messid_uid` (`messid`,`uid`)
) ENGINE=MEMORY ;

CREATE TABLE `chat_message` (
  `messid` int(11) unsigned NOT NULL auto_increment,
  `uid` int(11) NOT NULL default '0',
  `uname` varchar(20) NOT NULL default '',
  `time` int(10) unsigned NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`messid`)
) ENGINE=MyISAM ;

CREATE TABLE `chat_online` (
  `uid` int(11) unsigned NOT NULL default '0',
  `uname` varchar(25) NOT NULL default '',
  `updated` int(10) unsigned NOT NULL default '0',
  `sleepdate` int(10) NOT NULL default '0',
  KEY `uid` (`uid`),
  KEY `uname` (`uname`),
  KEY `updated` (`updated`)
) ENGINE=MEMORY ;