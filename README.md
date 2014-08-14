phalcon-skeleton
================

You can see my another repo with [__Yona CMS__](https://github.com/oleksandr-torosh/yona-cms) based on Phalcon

Phalcon PHP Framework __Modular application__ with my best practices of development.

This application is under __development__.

Installation
--------
Create MySQL tables:
```sql
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
```
