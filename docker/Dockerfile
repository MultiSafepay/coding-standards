FROM php:8.0-cli

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN apt-get update -y
RUN apt-get install -y zip unzip

RUN install-php-extensions zip

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /app

COPY ./ /app
RUN composer update

