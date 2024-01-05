# FROM docker.io/php:fpm
# RUN docker-php-ext-install pdo  

FROM php:fpm-alpine

RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql pgsql