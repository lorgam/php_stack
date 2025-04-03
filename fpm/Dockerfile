FROM php:8.2-fpm-alpine

RUN apk update && apk add git
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html
