FROM php:7.0-apache
MAINTAINER David J Eddy <me@davidjeddy.com>

COPY ./docker/apache2/ssd_v1.conf /etc/apache2/sites-available/ssd_v1.conf
COPY ./ /var/www/html

# https://www.a2hosting.com/kb/developer-corner/apache-web-server/using-the-mod-speling-apache-module
RUN a2enmod speling
RUN apachectl configtest

EXPOSE 80
CMD ["apache2-foreground"]