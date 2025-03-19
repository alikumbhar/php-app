    FROM php:7.4-apache

    COPY . /var/www/html/

     RUN docker-php-ext-install mysqli
#    RUN echo "ServerName  localhost" >> /etc/apache2/apache2.conf
