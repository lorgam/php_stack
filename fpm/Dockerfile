FROM php:8.2-fpm-alpine

RUN apk add --update git zlib-dev libpng-dev libjpeg-turbo-dev libzip-dev freetype-dev
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure gd --with-jpeg --with-freetype
RUN docker-php-ext-install mysqli pdo pdo_mysql gd zip

WORKDIR /var/www/html
