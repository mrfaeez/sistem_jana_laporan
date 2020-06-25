# create databases

CREATE DATABASE IF NOT EXISTS `medicine`;

GRANT ALL PRIVILEGES ON medicine.* TO 'root' identified by 'secret';
