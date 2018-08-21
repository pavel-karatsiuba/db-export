FROM php:7.2-apache

COPY . /var/www/html
RUN apt-get update && apt-get install -y mysql-client \
&& docker-php-ext-install pdo_mysql mysqli

RUN a2enmod rewrite

RUN service apache2 restart

EXPOSE 80