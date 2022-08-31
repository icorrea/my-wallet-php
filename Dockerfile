FROM php:7.4-apache
# Source= https://stackoverflow.com/questions/51393494/how-to-change-the-document-root-in-php7-1-apache-from-docker-compose-yml
# RUN sed -i '/LoadModule rewrite_module/s/^#//g' /etc/apache2/conf/httpd.conf

RUN apt-get update
RUN apt-get install apache2
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql
RUN apt-get update && apt-get upgrade -y \
&& apt-get install -y libicu-dev \ 
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl
