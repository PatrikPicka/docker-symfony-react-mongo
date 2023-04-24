FROM php:8.1-fpm

RUN apt-get update  \
    && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip openssl libssl-dev libcurl4-openssl-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql  \
    && pecl install apcu mongodb \
    && docker-php-ext-enable apcu mongodb \
    && echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/project

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

