-- Adminer 5.3.0 MySQL 9.4.0 dump

CREATE USER 'reader'@'%' IDENTIFIED BY 'yourPassword';
GRANT SELECT ON blog.* TO 'reader'@'%';

FLUSH PRIVILEGES;