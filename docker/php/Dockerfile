FROM php:8.3-fpm

RUN apt update && \
    apt install -y \
        libpq-dev \
        vim && \
    docker-php-ext-install \
        pdo_pgsql \
        pgsql
