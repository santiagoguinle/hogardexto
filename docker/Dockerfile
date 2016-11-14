FROM php:5.6.18-apache
 
RUN apt-get update && apt-get install -y git zlib1g-dev && docker-php-ext-install mysql pdo_mysql mysqli zip 

RUN a2enmod rewrite
 
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/bin/composer


#Memcached
RUN apt-get install -y libz-dev libmemcached-dev && \
    pecl install memcached && \
    docker-php-ext-enable memcached

#RUN apt-get update && apt-get install -y php5-memcached
#RUN php5enmod memcached

WORKDIR /var/www