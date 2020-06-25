FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

# Use base mysql image with tag 5.7

FROM mysql:5.7

# Copy our custom SQL file to /docker-entrypoint-initdb.d folder

COPY ./01-databases.sql /mysql/docker-entrypoint-initdb.d/01-databases.sql

RUN docker-php-ext-install pdo pdo_mysql
