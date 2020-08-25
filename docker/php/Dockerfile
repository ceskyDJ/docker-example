ARG VERSION

FROM php:${VERSION}-fpm-alpine3.12

RUN apk update && apk add --no-cache libzip-dev icu-dev bzip2-dev libxslt-dev \
        && docker-php-ext-install zip pdo_mysql mysqli intl bz2 xsl

COPY ./php.ini $PHP_INI_DIR/conf.d/php.ini