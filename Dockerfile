FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    git \
    unzip \
    nodejs \
    npm \
    mysql-client \
    && docker-php-ext-install pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/laravel