FROM composer as dep

WORKDIR /app/

COPY . ./

RUN composer install --ignore-platform-reqs  --no-scripts --no-suggest --optimize-autoloader

FROM php:7.4 as web

COPY . /var/www

WORKDIR /var/www

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN  apt-get update -y && apt-get install -y libmcrypt-dev openssl git zip \
        && docker-php-ext-install pdo_mysql

COPY --from=dep /app/vendor /var/www/vendor

# VOLUME ["./vendor", "/var/www/vendor"]


EXPOSE 8000
