FROM php:8.0-fpm-alpine
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug
RUN docker-php-ext-enable pdo pdo_mysql xdebug
