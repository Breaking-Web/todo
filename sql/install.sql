CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creationDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(255) NOT NULL DEFAULT '',
  `priority` int(4) NOT NULL DEFAULT '0',
  `effort` int(4) NOT NULL DEFAULT 1,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completionDate` datetime DEFAULT NULL,
  `dueDate` datetime DEFAULT NULL,
  `notes` varchar(10000) DEFAULT '',
  `project` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `version` int(11) NOT NULL DEFAULT '1',
  `recurrenceMode` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE `recurringCopied` (
  `todo_id` int(11) NOT NULL,
  `copiedDate` datetime NOT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

CREATE TABLE `list` (
	id int(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(255),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE tags (
        id int(11) AUTO_INCREMENT NOT NULL,
        name varchar(255) NOT NULL,
        PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE todo_tags (
        todo_id int(11),
        tag_id int(11),
        PRIMARY KEY (todo_id, tag_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
