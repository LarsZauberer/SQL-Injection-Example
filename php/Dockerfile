FROM php:7.0-fpm-alpine

RUN apk add --no-cache postgresql-dev

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql
