# create databases
CREATE DATABASE IF NOT EXISTS `mysql`;
CREATE DATABASE IF NOT EXISTS `mysql2`;

# create root user and grant rights
CREATE USER 'root'@'localhost' IDENTIFIED BY 'local';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';